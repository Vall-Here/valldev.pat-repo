<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use L5Swagger\L5SwaggerServiceProvider;

Route::get('/', function () {
    return view('welcome');
});

