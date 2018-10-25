@extends('layouts.tools-info')
@section('title', 'Base64 Decode/Encode')

@section('info')
    https://base64.{{ env('APP_DOMAIN') }}/encode/test

    https://base64.{{ env('APP_DOMAIN') }}/decode/dG9vbHZhdWx0
@endsection
