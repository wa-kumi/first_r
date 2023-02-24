<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <a href="/">戻る</a>
        <p>test</p>
        
         @foreach($tests as $tes)
                <div class='test'>
                    <p class='body'>{{ $tes->id }}</p>

                </div>
         @endforeach
         
         <input type="datetime-local" name="testdatetime" value="2023-03-23T20:33">
         
         <input type="text" name="text" value="hahaha"/>
         
         <input type="date" name="testdatetime" id="current_date">
         
         <p>today</p>
        <input type="datetime-local" id="today"> 
        <input type="datetime-local" id="tomorrow"> 
        
        <!--<p>aaa</p>-->
        
        <script type="text/javascript">
    //今日の日時を表示


        window.onload = function () {
            //今日の日時を表示
            var date = new Date()
            // date.setDate( date.getDate() + 1)
            var year = date.getFullYear()
            var month = date.getMonth() + 1
            var day = date.getDate()

            var toTwoDigits = function (num, digit) {
              num += ''
              if (num.length < digit) {
                num = '0' + num
              }
              return num
            }
            
            var yyyy = toTwoDigits(year, 4)
            var mm = toTwoDigits(month, 2)
            var dd = toTwoDigits(day, 2)
            var ymd = yyyy + "-" + mm + "-" + dd + "T20:23";
            
            
            document.getElementById("today").value = ymd;
            
            var tomorrow = new Date()
            console.log(tomorrow);
            tomorrow.setDate( tomorrow.getDate() + 1)
            var yeart = tomorrow.getFullYear()
            var montht = tomorrow.getMonth() + 1
            var dayt = tomorrow.getDate()
            
 
            
            var yyyyt = toTwoDigits(yeart, 4)
            var mmt = toTwoDigits(montht, 2)
            var ddt = toTwoDigits(dayt, 2)
            var ymdt = yyyyt + "-" + mmt + "-" + ddt + "T20:23";

            document.getElementById("tomorrow").value = ymdt;
        }
        </script>
             
         
    </body>
</html>