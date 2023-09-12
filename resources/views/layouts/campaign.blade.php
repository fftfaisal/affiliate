<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        <script>(function(w){w.fpr=w.fpr||function(){w.fpr.q = w.fpr.q||[];w.fpr.q[arguments[0]=='set'?'unshift':'push'](arguments);};})(window);
            fpr("init", {cid:"5a6hgk3l"});
            fpr("click");
        </script>
        <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <!-- Top Nav -->
        <div class="w-full bg-green fixed shadow z-1 bg-[#272727]">
            <div class="container mx-auto">
                <div class="w-full flex justify-center items-center py-4 px-8">
                    <!-- Brand -->
                    <div class="text-center text-white font-bold">
                        <a href="/">
                            <x-application-logo class="fill-current text-gray-500" />
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="min-h-screen flex flex-col sm:justify-center items-center bg-gray-100 dark:bg-gray-900">
            <div class="w-full bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    @stack('script')
    </body>
</html>
