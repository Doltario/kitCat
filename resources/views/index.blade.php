<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>KitCat</title>
        <script src="/js/app.js" defer></script>
    </head>
    <body>
        <div id="app">
            <router-view>
            </router-view>
        </div>
    </body>
</html>
