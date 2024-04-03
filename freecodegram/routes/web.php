<?php

use Illuminate\Support\Facades\Route;
use App\Models\Listing;

Route::get('/', function () {
    return view('listings', [
        'heading' => 'Latest listings',
        'listings' => Listing::all()
    ]);
});


Route::get('/list/{listing}', function (Listing $listing) {
    return view('listing', [
        'listing' => $listing
    ]);
});