<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Full Stack Blog</title>

        <link rel="stylesheet" href="/css/all.css">

    </head>
    <body>
        <div id="app">
            <mainapp></mainapp>
        </div>
    </body>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.18/vue.min.js"></script> -->

    <script src="{{ mix('/js/app.js') }}"></script>
</html>
