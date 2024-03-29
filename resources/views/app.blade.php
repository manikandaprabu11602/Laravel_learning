<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>ًApplication</title>
        @vite('resources/css/app.css')

        <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />   
    </head>
    <body>
        <div id="app"></div>

        @vite('resources/js/app.js')
        <script src="assets/js/app.min.js"></script>
        
    </body>
</html>