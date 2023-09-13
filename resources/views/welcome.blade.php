<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script>(function(w){w.fpr=w.fpr||function(){w.fpr.q = w.fpr.q||[];w.fpr.q[arguments[0]=='set'?'unshift':'push'](arguments);};})(window);
            fpr("init", {cid:"5a6hgk3l"});
            fpr("click");
        </script>
        <script src="https://cdn.firstpromoter.com/fpr.js" async></script>
        <!-- Styles -->
        @vite(['resources/js/app.js','resources/css/app.css'])
    </head>
    <body class="antialiased">
        <div class="relative flex justify-center items-center flex-col min-h-screen bg-dots-darker bg-center bg-gray-100 dark:bg-dots-lighter dark:bg-gray-900 selection:bg-red-500 selection:text-white p-5">
            <div class="mb-10">
                <x-application-logo></x-application-logo>
            </div>
            <h1 class="text-center text-2xl sm:text-5xl font-bold">Welcome to
                <span class="text-[#198bcc]">Samson</span> <span class="text-[#4d7092]">Clinical</span> <span class="text-[#198bcc]">Courses</span> Affiliate Program</h1>
        </div>
    </body>
</html>
