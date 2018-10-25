<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('tools-info/url');
});

Route::get('/parse/{url}', function($url) {
    return response(parse_url($url));
})->where('url', '(.*)');

Route::get('/decode/{data}', function($data) {
    return response(urldecode($data));
});

Route::get('/encode/{data}', function($data) {
    return response(urlencode($data));
});
