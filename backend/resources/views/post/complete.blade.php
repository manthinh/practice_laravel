<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/tweet_view.css') }}" />
        <title>Laravel</title>
    </head>
    <body>

    
        <h1>編集</h1>
        <form action="edit" method="GET">
            @csrf

            
            <th>{{ $edit->text }}</th>
            <tr>
            <input type="text" name="edit" value="" size="48"></p>
            </tr>

            <tr>
                <td colspan="2"><br>
                <input type="submit" value="編集する" class = button>
            </tr>
            @if (session('status'))<div class="alert alert-success" role="alert" onclick="this.classList.add('hidden')">{{ session('status') }}</div>@endif
