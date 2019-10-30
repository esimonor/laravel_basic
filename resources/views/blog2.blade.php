<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Blog2</title>
    </head>
    
    <body>
    <p>El identificador del articulo es {{$blog}} y el nombre el {{$nombre}}</p>
    <?php
    echo "Este es el articulo numero {$blog} y el nombre el {$nombre}";
    ?>
    </body>
</html>