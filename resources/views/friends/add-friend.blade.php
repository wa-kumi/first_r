<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>Blog Name</h1>
        <form action="/friend/store" method="POST">
            @csrf

            <div class="title">
                <h2>友達追加</h2>
                <input type="integer" name="friend_relation[following_user_id]" placeholder="ID">
            </div>

            <input type="submit" value="store"/>

        </form>
        <div class='footer'>
            <a href="/">戻る</a>
        </div>
    </body>
</html>