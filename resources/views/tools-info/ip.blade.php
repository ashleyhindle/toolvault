@extends('layouts.tools-info')
@section('title', 'IP')

@section('info')
    This is the 'info'/'sales' page for this tool.

    - Go to / to have the IP returned as plain text
    - /json as JSON
    - /jsonp as JSONP with the callback 'callback'
    - /jsonp?callback=test as JSONP with the callback 'test'
@endsection
