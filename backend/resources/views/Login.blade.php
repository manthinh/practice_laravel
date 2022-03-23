<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/todoIndex.css') }}">
    </head>
    <body>          
        <h1>ログイン</h1>
        <hr>           
        <form action="{{ route('connect') }}" method="POST">
            @csrf
            <tr>
                <th>
                    ユーザID
                </th>
                <td>
                    <input type="text" name="user_id" value="" size="24"><br>

                </td>
            </tr>
            <tr>
                <th>
                    パスワード
                </th>
                <td>
                    <input type="password" name="password" value="" size="24">
                </td>
            </tr>
            <tr>
                <td colspan="2"><br>
                    <input type="submit" value="ログイン" class = button　onclick="location.href='./todoIndex'">
            </tr>
        </form>
    </body>
</html>




