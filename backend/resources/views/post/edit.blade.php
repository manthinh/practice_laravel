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
        <ul>
            <li>
                @foreach ($edit as $editOfData)
                    
                <center><p>編集：{{$editOfData}}<br>
                    <input type="text" name="comment" value="" size="24"></p>
                    @endforeach
                </center>    
            </li>
            <tr>
                <center>
                    <td colspan="2"><br>
                    <input type="submit" value="編集する" class = button>
                </tr>
                </center>
        </ul>
    </body>
</html>