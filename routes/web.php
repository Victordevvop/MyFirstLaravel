<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CustomersController;

Route::get('contact', function () {
    return 'contact us';
});

Route::view('home', 'home');


Route::view('contact', 'contact');
Route::view('about', 'about');

Route::get("customers", function() {
    return view('customers');
});



Route::get('/customer', [CustomersController::class, 'list']);
