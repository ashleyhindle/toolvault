@extends('layouts.tools-info')
@section('title', 'URL Decode/Encode')

@section('info')
    https://url.{{ env('APP_DOMAIN') }}/encode/O' Leary!
    <hr />
    https://url.{{ env('APP_DOMAIN') }}/decode/dG9vbHZhdWx0
    <hr />
    URL Encode the URL first
    https://url.{{ env('APP_DOMAIN') }}/parse/https://www.google.com/?query=string#fragment
@endsection
