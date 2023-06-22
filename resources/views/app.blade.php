<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <!-- Your head content here -->      
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body>
        @inertia
       <script src="{{ mix('/js/app.js') }}"></script>
    </body>
</html>