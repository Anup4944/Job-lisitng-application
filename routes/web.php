<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;

// All Listing
Route::get("/", [ListingController::class, "index"]);

// Show create forms

Route::get("/listings/create", [
    ListingController::class,
    "create",
])->middleware("auth");

// Store Listing data

Route::post("/listings", [ListingController::class, "store"])->middleware(
    "auth"
);

// Show edit form

Route::get("/listings/{listing}/edit", [
    ListingController::class,
    "edit",
])->middleware("auth");

// Edit submit to Update

Route::put("/listings/{listing}", [
    ListingController::class,
    "update",
])->middleware("auth");

// Edit submit to Update

Route::delete("/listings/{listing}", [
    ListingController::class,
    "destroy",
])->middleware("auth");

// Manage listings

Route::get("/listings/manage", [
    ListingController::class,
    "manage",
])->middleware("auth");

// Single Listing

Route::get("/listings/{listing}", [ListingController::class, "show"]);

// Show register form

Route::get("/register", [UserController::class, "create"])->middleware("guest");

// Create new user

Route::post("/users", [UserController::class, "store"]);

// Logout user

Route::post("/logout", [UserController::class, "logout"])->middleware("auth");

// Show login form

Route::get("/login", [UserController::class, "login"])
    ->name("login")
    ->middleware("guest");

// Login user

Route::post("/users/auth", [UserController::class, "auth"]);

// Comman resource routes:
// index - show all
// show - show individual
// create - show form to create new listing
// store = store new lisitng
// edit = show form to edit listing
// update - update listing
// destroy - delete lisitng
