<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/todoIndex.css') }}">
    </head>
    <body>
        <h1>
            ログインフォーム<br>
        </h1>
        <ul>
            <input type="text" placeholder="ユーザー名" class=user><br>
            <input type="password" name="pass" placeholder="パスワード" class=pass><br>
            <p>
                <input type="submit" value="Sign up" class=button>
            </p>
        </ul>                                               

    </body>

<?php
if(isset($_POST['user'])) {
    $dsn='mysql:dbname=users;charset=utf8';
    $username='phper';
    $password='secret';
    $dbh = new PDO($dsn,$user,$password);
    $stmt = $dbh->prepare("INSERT INTO USER VALUES(:user,:password)");
    $stmt->bindParam(':user',$_POST['user']);
    $stmt->bindParam(':password',$_POST['password']);
    $stmt->execute();
}


