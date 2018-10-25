<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('tools-info/url');
});

Route::get('/parse/{url}', function($url) {
    // Doing this allows us to take special chars (?, #, &, etc..) in the query string and not have those things be missed/parsed/removed
    $url = preg_replace('#^/parse/#', '', $_SERVER['REQUEST_URI']);
    return response(parse_url($url));
})->where('url', '(.*)');

Route::get('/decode/{data}', function($data) {
    $data = preg_replace('#^/decode/#', '', $_SERVER['REQUEST_URI']);
    return response(urldecode($data));
})->where('data', '(.*)');

Route::get('/encode/{data}', function($data) {
    $data = preg_replace('#^/encode/#', '', $_SERVER['REQUEST_URI']);
    return response(urlencode($data));
})->where('data', '(.*)');
