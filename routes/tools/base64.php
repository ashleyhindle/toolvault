<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('tools-info/base64');
});

Route::get('/decode/{data}', function($data) {
    return response(base64_decode($data));
});

Route::get('/encode/{data}', function($data) {
    return response(base64_encode($data));
})->where('data', '(.*)');
