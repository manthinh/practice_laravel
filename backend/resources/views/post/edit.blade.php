<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ mix('css/tweet_view.css') }}" />
        <title>Laravel</title>
    </head>
    <body>

        @section('post_edit')
        <h1>編集</h1>
        <form action='{{ route('update') }}' method='post'>
            {{ csrf_field() }}
            <tr>
            <input type="hidden" name="id" value='{{ $edit->text }}' size="48"></p>
            </tr>
            
            <tr>
                <td colspan="2"><br>
                <input type="submit" value="編集する" class = button>
            </tr>
        @endsection