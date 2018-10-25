<?php
use Illuminate\Support\Facades\Route;

Route::get('/', function() {
    return view('tools-info/httpstatus');
});

Route::any('/{statusCode}', function($statusCode) {
    return response('', $statusCode);
})->where('statusCode', '[0-9]{3}');
