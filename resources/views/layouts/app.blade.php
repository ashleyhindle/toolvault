<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>ToolVault.xyz - @yield('title')</title>
    <link href="/css/app.css" rel="stylesheet">

    <!-- TODO: Favicon -->
    <!-- TODO: OpenGraph -->
    <!-- TODO: Logo -->
    <!-- TODO: Google Analytics -->
    <!-- TODO: Add icons system -->
</head>

<body class="text-grey-darkest">
    <nav class="flex items-center justify-between flex-wrap bg-yellow-dark p-6 mb-3">
        <div class="flex items-center flex-no-shrink mr-6">
            <svg class="fill-current h-8 w-8 mr-2" viewBox="0 0 16 16" version="1.1" width="54" height="54" aria-hidden="true"><path fill-rule="evenodd" d="M4.48 7.27c.26.26 1.28 1.33 1.28 1.33l.56-.58-.88-.91 1.69-1.8s-.76-.74-.43-.45c.32-1.19.03-2.51-.87-3.44C4.93.5 3.66.2 2.52.51l1.93 2-.51 1.96-1.89.52-1.93-2C-.19 4.17.1 5.48 1 6.4c.94.98 2.29 1.26 3.48.87zm6.44 1.94l-2.33 2.3 3.84 3.98c.31.33.73.49 1.14.49.41 0 .82-.16 1.14-.49.63-.65.63-1.7 0-2.35l-3.79-3.93zM16 2.53L13.55 0 6.33 7.46l.88.91-4.31 4.46-.99.53-1.39 2.27.35.37 2.2-1.44.51-1.02L7.9 9.08l.88.91L16 2.53z"></path></svg>
            <span class="font-semibold text-xl tracking-tight"><a href="{{ env('APP_URL') }}">ToolVault.xyz</a></span>
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
