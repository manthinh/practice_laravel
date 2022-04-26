<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/tweet_view.css') }}" />
        <title>Laravel</title>
    </head>
    <body>

        @section('/tweet_view/edit/{id}')
        <h1>編集</h1>
        <form action='{{ route('/tweet_view/update/{id}') }}' method='post'>
            {{ csrf_field() }}
            <tr>
            <input type="hidden" name="id" value='{{ $edit->id }}' size="48"></p>
            </tr>
            内容：<input type='text' name='content' value='{{ $edit->contents }}'><br>
            <tr>
                <td colspan="2"><br>
                <input type="submit" value="編集する" class = button>
            </tr>
        @endsection
        @yield('/tweet_view/edit/{id}')