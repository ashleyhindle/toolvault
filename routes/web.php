<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function (Request $request) {
    return view('homepage');//response($request->ip(), 200)->header('Content-Type', 'text/plain');
});
