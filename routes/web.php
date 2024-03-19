<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IndexController;
use App\Http\Controllers\BannerController;
use App\Models\Banner;
use App\Http\Controllers\PropertyController;
use App\Models\Property;
use App\Models\Propertytype;
use App\Http\Controllers\PropertytypeController;
use App\Http\Controllers\ContactController;

Route::get('/', [IndexController::class, 'index']);
//Route::get('/', [BannerController::class, 'showBanners']);
Route::get('/properties', function () {
    return view('Frontend.properties');
})->name('properties');

Route::get('/property-details', function () {
    return view('Frontend.property-details');
})->name('property-details');

Route::get('/contact', function () {
    return view('Frontend.contact');
})->name('contact');
// Route::get('/property-details/{id}', function ($id) {
//     $property = Property::findOrFail($id);
//     return view('Frontend.property-details', ['property' => $property]);
// })->name('property-details');

Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
// Route::get('/properties', [IndexController::class, 'filterProperties'])->name('properties.index');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

// Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');


Route::post('/contact/submit', [ContactController::class, 'store'])->name('contact.submit');

// Route::get('/properties/type/{slug}', 'App\Http\Controllers\PropertyController@showBySlug')

// Route::get('/', [IndexController::class, 'showHomePage'])->name('index');

