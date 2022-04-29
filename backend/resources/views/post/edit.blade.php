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
        <center>
        <h1>編集</h1>
        </center>
        <ul>
            <tr>
                @foreach ($edit as $editOfData)
                @endforeach
                <center><p>編集<br>
                    <form class="form-signin" role="form" method="post" action="/tweet_view/edit/{{$edit->id}}">
                        <input type="hidden" name="_token" value="{{csrf_token()}}">
                        <input type="hidden" name="_method" value="PATCH">
<input type="text" name="contents" value="{{ $edit->contents }}" class="form-control" placeholder="文字を入力してください" autofocus>
                </center>    
            </tr>
            <tr>
                <center>
                    <td colspan="2"><br>
                        <button class="btn btn-lg btn-primary btn-block" type="submit">編集</button>
                </tr>
                </center>
        </ul>
    </body>
</html>