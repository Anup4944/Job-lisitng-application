<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

// All Listing
Route::get('/', [ListingController::class, 'index'] );

// Show create forms

Route::get('/listings/create', [ListingController::class, 'create']);


// Store Listing data

Route::post('/listings', [ListingController::class, 'store']);


// Show edit form

Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

// Edit submit to Update

Route::put('/listings/{listing}', [ListingController::class, 'update' ]);

// Single Listing

Route::get('/listings/{listing}', [ListingController::class, 'show']);





// Comman resource routes:
// index - show all
// show - show individual
// create - show form to create new listing
// store = store new lisitng
// edit = show form to edit listing
// update - update listing
// destroy - delete lisitng 