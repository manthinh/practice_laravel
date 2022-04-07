<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/todoIndex.css') }}">
    </head>
    <body>
        <center>          
        <h1>ログイン</h1>
        </center>
        <hr>   
        <p>{{ session('flash_message') }}</p>        
        <form action="{{ route('connect') }}" method="POST">
            @csrf
            <tr>
        <center>
            <th>
            ユーザID
            </th>
            <td>
            <input type="text" name="user_id" value="" size="24"><br>
            </td>
        </center>
        </tr>
        <tr>
        <center>
        <th>
            パスワード
        </th>
            <td>
                <input type="password" name="password" value="" size="24">
            </td>
        </center>
        </tr>
        <tr>
        <center>
            <td colspan="2"><br>
            <input type="submit" value="ログイン" class = button>
        </tr>
        </center>
        </form>
    </body>
</html>




