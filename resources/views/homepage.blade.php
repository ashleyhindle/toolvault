@extends('layouts.app')

@section('title', 'Page Title')

@section('content')
    <div class="max-w-2xl mx-auto" id="filterTools">

        <!-- Filtering only works once you have 2 chars -->
        <h1>Filter by tool name</h1>
        <div class="mt-2">
            <input title="Filter by tool name" v-model="filterBy" autocomplete="off" name="filter" id="filter-tools-input" class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-yellow-dark rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text"/>
        </div>

        <!-- TODO: Improve filtering - I don't like each tool being a component, and hiding itself -->
        <!-- TODO: Especially because this means it's not progressively enhanced -->
        <!-- TODO: If a user doesn't have JS, they don't see the tools - very dumb -->

        <!-- Tool grid -->
        <div class="flex flex-wrap">
            <tool-box
                name="IP Address"
                description="Get your IP information programmatically & simply - ipv4, ipv6, plain text, JSON or JSONP"
                url="{{ url('/ip') }}"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            <tool-box
                name="HTTP Status Codes"
                description="Returns the passed HTTP status codes for testing with any HTTP verb"
                url="{{ url('/httpstatus') }}"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            <tool-box
                name="Echo Request Data"
                description="Echos all passed query string, POST, file and header values for easy testing with any HTTP verb"
                url="{{ url('/echo') }}"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            <tool-box
                name="Base64 Encode and Decode"
                description="Easily encode/decode base64"
                url="{{ url('/base64') }}"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            <tool-box
                name="URL Encode and Decode"
                description="Easily encode/decode with PHP's urlencode/urldecode"
                url="{{ url('/url') }}"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            {{--
            <tool-box
                name="PHP Information"
                description="PHP LTS information, JSON API or nice fancy HTML view, no plain text etc.."
                url="https://php.{{ env('APP_DOMAIN') }}/"
                v-bind:filter-by="filterBy"
            >
            </tool-box>

            <tool-box
                name="Image Conversion"
                description="Convert all your images, etc.."
                url="https://imageconversion.{{ env('APP_DOMAIN') }}/"
                v-bind:filter-by="filterBy"
            >
            </tool-box>
            --}}
        </div>
    </div>
@endsection
