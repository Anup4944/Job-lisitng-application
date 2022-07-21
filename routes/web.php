<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listing
Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest Listings',
        'listings' => Listing::all()
    ]);
});

// Single Listing

Route::get('/listings/{id}', function($id){

    return view('listing' , [
        'listing' => Listing::find($id)
    ]);
});


// Route::get('/hello', function(){
//     return response('<h1>Hello world</h1>', 200)->header('Content-type', 'text/plain');
// });

// Route::get('/post/{id}', function($id){
//     return response('Post' . $id);
// })->where('id', '[0-9]+');


// Route::get('/search', function(Request $request){
    
//    return ($request->name . ' ' . $request->city);
// });