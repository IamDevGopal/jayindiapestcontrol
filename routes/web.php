<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// User view routes

Route::get('/', function () {
    return view('index');
})->name("home");

Route::prefix("/pages")->group(function () {
    Route::get("/about", function () {
        return view("pages.about");
    })->name("about");

    Route::get("/contact", function () {
        return view("pages.contact");
    })->name("contact");

    Route::get("/services", function () {
        return view("pages.services");
    })->name("services");

    Route::get("/blog", function () {
        return view("pages.blog");
    })->name("blog");

    Route::get("/blog-details", function () {
        return view("pages.blog-details");
    })->name("blog-details");

    Route::get("/services-details", function () {
        return view("pages.services-details");
    })->name("services-details");
});


// Admin view routes
Route::view("/admin", "admin.index");
