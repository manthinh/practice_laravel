<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form action="tweet" method="POST">
            @csrf
        <center><h1>
            新規作成ページ
        </h1></center>
        <ul>
            <tr>
                <center><p>新規作成<br>
                <input type="text" name="tweet" value="" size="24"></p>
                </center>    
            </tr>
            <tr>
                <center>
                <td colspan="2"><br>
                <input type="submit" value="追加" class = button>
            </tr>
                </center>
            <tr>    
                <center>
                <a href="http://localhost:8080/tweet_view">一覧表示</a>
                </center>
            </tr>
        </ul>
    </body>
</html>