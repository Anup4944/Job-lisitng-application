<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// All Listing
Route::get("/", [ListingController::class, "index"]);

// Show create forms

Route::get("/listings/create", [ListingController::class, "create"]);

// Store Listing data

Route::post("/listings", [ListingController::class, "store"]);

// Show edit form

Route::get("/listings/{listing}/edit", [ListingController::class, "edit"]);

// Edit submit to Update

Route::put("/listings/{listing}", [ListingController::class, "update"]);

// Edit submit to Update

Route::delete("/listings/{listing}", [ListingController::class, "destroy"]);

// Single Listing

Route::get("/listings/{listing}", [ListingController::class, "show"]);

// Show register form

Route::get("/register", [UserController::class, "create"]);

// Create new user

Route::post("/users", [UserController::class, "store"]);

// Logout user

Route::post("/logout", [UserController::class, "logout"]);

// Comman resource routes:
// index - show all
// show - show individual
// create - show form to create new listing
// store = store new lisitng
// edit = show form to edit listing
// update - update listing
// destroy - delete lisitng
