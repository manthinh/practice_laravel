<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/tweet_view.css') }}" />
        <title>Laravel</title>
    </head>
    <body>

    <center>
        <h1>{{$detail->text}}の詳細</h1>
        <form action="detail" method="GET">
            @csrf
            <div>
                {{$detail->contents}}
            </div>
    </center>