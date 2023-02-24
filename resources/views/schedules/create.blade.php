<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <body>
        <h1>スケジュール作成</h1>
        <form action="/calendar/store" method="POST">
            @csrf
            <div class="event">
                <h2>日程</h2>
                <input type="datetime-local" name="schedule[start_date]" placeholder="開始日" value="20223-03-23"/>
                <input type="date" name="schedule[end_date]" placeholder="終了日"/>
                <h2>イベント名</h2>
                <input type="text" name="schedule[event_name]" placeholder="タイトル"/>
            </div>
            
            <input type="submit" values="保存"/>
        </form>
        <div class='footer'>
            <a href="/calendar">戻る</a>
        </div>
    </body>
</html>