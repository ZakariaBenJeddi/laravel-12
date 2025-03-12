<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// DEMO POUR (PROPS & SLOT & YIELD & SECTION) 
Route::get('/about', function () {
    return view('about');
});

Route::get("/contact", function (){
    return view("contact");
});
Route::get("/services", function (){
    return view("services");
});
// DEMO POUR (PROPS & SLOT & YIELD & SECTION) 

use App\Http\Controllers\ControllerView;
use App\Http\Controllers\ProductController;

Route::get("/controller/{test?}",[ControllerView::class,"ControllerView1"]);




// Controller De Ressource
Route::resource("product",ProductController::class)->names("product");
// Controller De Ressource