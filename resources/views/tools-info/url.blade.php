@extends('layouts.tools-info')
@section('title', 'URL Decode/Encode')

@section('info')
    <h1>DISCLAIMER struggles with some characters when used via GET, use form for POST and safer encoding/decoding</h1>

    https://url.{{ env('APP_DOMAIN') }}/encode/O' Leary!
    <hr />
    https://url.{{ env('APP_DOMAIN') }}/decode/dG9vbHZhdWx0
    <hr />
    URL Encode the URL first
    https://url.{{ env('APP_DOMAIN') }}/parse/https://boris:johnson@www.google.com/?query=string#fragment

    <hr />

    Problem: Passing ? or # etcetra as part of the parameter to encode/decode/parse will get missed as they think it's part of the URL, not the parameter being encoded/decoded/parsed.

    For more complicated encoding/decoding/parsing we'll need to use POST
@endsection
