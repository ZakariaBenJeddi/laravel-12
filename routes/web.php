<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});


use App\Http\Controllers\ControllerView;
Route::get("/controller/{test?}",[ControllerView::class,"ControllerView1"]);