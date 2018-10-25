<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('homepage');
});

Route::get('/{subdomain}', function ($subdomain) {
    return view('tools-info/' . $subdomain);
});
