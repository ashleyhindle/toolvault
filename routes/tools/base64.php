<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('tools-info/base64');
});

Route::get('/decode/{data}', function($data) {
    $data = preg_replace('#^/decode/#', '', $_SERVER['REQUEST_URI']);
    return response(base64_decode($data));
})->where('url', '(.*)');

Route::get('/encode/{data}', function($data) {
    $data = preg_replace('#^/encode/#', '', $_SERVER['REQUEST_URI']);
    return response(base64_encode($data));
})->where('data', '(.*)');
