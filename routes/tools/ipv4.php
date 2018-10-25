<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function(Request $request) {
    return $request->ip();
});

Route::get('/json', function(Request $request) {
    return response()->json(['ip' => $request->ip()]);
});

Route::get('/jsonp', function(Request $request) {
    return response()
        ->jsonp($request->input('callback', 'callback'), ['ip' => $request->ip()]);
});
