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
        <form action="{{ route('update', $edit->id) }}" enctype="multipart/form-data" method="POST" id="new">
            @csrf
            @method('PUT')
            <tr>
            <input type="text" name="edit" value="" size="48"></p>
            </tr>
            
            <tr>
                <td colspan="2"><br>
                <input type="submit" value="編集する" class = button>
            </tr>