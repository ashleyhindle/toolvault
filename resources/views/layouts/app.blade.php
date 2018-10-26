<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ToolVault.xyz - @yield('title')</title>
    <link href="/css/app.css" rel="stylesheet">

    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5c3551">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- TODO: OpenGraph -->
    <!-- TODO: Logo -->
    <!-- TODO: Google Analytics -->
    <!-- TODO: Add icons system -->
</head>

<body class="text-grey-darkest">
    <nav class="flex items-center justify-between flex-wrap bg-yellow-dark p-6 mb-3">
        <div class="flex items-center flex-no-shrink mr-6">
            <img class="fill-current h-8 w-8 mr-2" src="/images/toolbox.png" width="54" height="54"/>
            <span class="dosis font-semibold text-xl tracking-tight"><a class="text-yellow-darkest" href="{{ env('APP_URL') }}">toolvault</a></span>
        </div>
        <div class="block lg:hidden">
            <button class="flex items-center px-3 py-2 border rounded hover:text-white hover:border-white">
                <svg class="fill-current h-3 w-3" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><title>Menu</title><path d="M0 3h20v2H0V3zm0 6h20v2H0V9zm0 6h20v2H0v-2z"/></svg>
            </button>
        </div>
        <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
            <div class="text-md lg:flex-grow">
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-blue-dark hover:text-blue-darkest mr-4">
                    Latest Tools
                </a>
                <a href="/" class="block mt-4 lg:inline-block lg:mt-0 text-blue-dark hover:text-blue-darkest mr-4">
                    Privacy Policy
                </a>
                <a href="mailto:suggest@toolvault.xyz" class="block mt-4 lg:inline-block lg:mt-0 text-blue-dark hover:text-blue-darkest mr-4">
                    Suggest Tool
                </a>
            </div>
        </div>
    </nav>

    <div id="app" class="container mx-auto">
        @yield('content')
    </div>

    <script type="text/javascript" src="/js/app.js"></script>
</body>
</html>
