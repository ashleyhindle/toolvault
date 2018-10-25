@extends('layouts.tools-info')
@section('title', 'URL Decode/Encode')

@section('info')
    https://url.{{ env('APP_DOMAIN') }}/encode/O' Leary!

    https://url.{{ env('APP_DOMAIN') }}/decode/dG9vbHZhdWx0
@endsection
