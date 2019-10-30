<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog</title>
    </head>
    
    <body>
    {{$blog}}
    <?php
    echo "Este es el articulo numero {$blog}";
    ?>
    </body>
</html>