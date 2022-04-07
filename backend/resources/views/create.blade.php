<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
    </head>
    <body>
        <form action="{{ route('create') }}" method="POST">
            @csrf
        <center><h1>
            新規作成ページ
        </h1></center>
        <ul>
            <li>
                <center><p>新規作成：<br>
                    <input type="text" name="comment" value="" size="24"></p>
                </center>    
            </li>
            <tr>
                <center>
                    <td colspan="2"><br>
                    <input type="submit" value="追加" class = button>
                </tr>
                </center>
        </ul>
    </body>
</html>