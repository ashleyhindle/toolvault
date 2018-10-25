<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::any('/{format?}', function(Request $request, $format='plain') {
    // We don't use the $request variable here as we don't want the 'trim' middleware or similar to modify the data users pass through
    $headers = [];
    foreach ($request->headers->all() as $key => $header) {
        $headers[$key] = $header[0];
    }

    $data = [
        'method' => $request->getMethod(),
        'querystring' => $_GET,
        'post' => $_POST,
        'files' => $_FILES,
        'headers' => $headers,
        'stdin' => $request->getContent()
    ];

    switch ($format) {
        case 'json':
            return response()->json($data);
        case 'jsonp':
            return response()->jsonp($request->input('callback', 'callback'), $data);
        case 'plain':
        default:
            return response($data);
    }
});
