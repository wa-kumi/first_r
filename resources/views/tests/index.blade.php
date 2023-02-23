<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <p>test</p>
        
         @foreach($tests as $tes)
                <div class='test'>
                    <p class='body'>{{ $tes->id }}</p>

                </div>
         @endforeach
    </body>
</html>