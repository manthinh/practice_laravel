<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>

    <center>
        <h1>新規登録表示ページ</h1>
    </center>
    @foreach ($tweets as $tweet)    
    <center>
        <li>{{ $tweet }}</li>
    </center>
    @endforeach
    @foreach ($tweetDays as $tweetDay)  
    <center>
        <a>{{ date('Y年m月d日',  strtotime($tweetDay)); }}</a>
    </center>
    @endforeach 
    

    </body>
</html>