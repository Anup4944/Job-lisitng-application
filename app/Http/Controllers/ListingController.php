<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    // get and show all listings
    public function index()
    {
        // dd(request('tag'));
        return view("listings.index", [
            "listings" => Listing::latest()
                ->filter(request(["tag", "search"]))
                ->paginate(6),
        ]);
    }

    // show single listings
    public function show(Listing $listing)
    {
        return view("listings.show", [
            "listing" => $listing,
        ]);
    }

    //show create form
    public function create()
    {
        return view("listings.create");
    }

    //store listing data
    public function store(Request $request)
    {
        $formFields = $request->validate([
            "title" => "required",
            "company" => ["required", Rule::unique("listings", "company")],
            "location" => "required",
            "title" => "required",
            "website" => "required",
            "email" => ["required", "email"],
            "tags" => "required",
            "description" => "required",
        ]);

        if ($request->hasFile("logo")) {
            $formFields["logo"] = $request
                ->file("logo")
                ->store("logos", "public");
        }

        Listing::create($formFields);

        return redirect("/")->with("message", "Job posted successfully!");
    }

    // Show edit form
    public function edit(Listing $listing)
    {
        return view("listings.edit", ["listing" => $listing]);
    }

    // Update listings

    public function update(Request $request, Listing $listing)
    {
        $formFields = $request->validate([
            "title" => "required",
            "company" => ["required"],
            "location" => "required",
            "title" => "required",
            "website" => "required",
            "email" => ["required", "email"],
            "tags" => "required",
            "description" => "required",
        ]);

        if ($request->hasFile("logo")) {
            $formFields["logo"] = $request
                ->file("logo")
                ->store("logos", "public");
        }

        $listing->update($formFields);

        return back()->with("message", "Job updated successfully!");
    }

    // Delete listings

    public function destroy(Listing $listing)
    {
        $listing->delete();
        return redirect("/")->with("message", "Job deleted successfully!");
    }
}
