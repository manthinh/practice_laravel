<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/todoIndex.css') }}" />
        {{-- <link rel="stylesheet" href="resources/css/todoIndex.css'" /> --}}
    </head>
    <body>
        {{-- ここから --}}
        <h1>
            <form>
                <div class="form">
                    <label for= "uname"></label>
                    <input type= "text" id="uname" name= "name">
                </div>

                <div class="todoadd">
                <button>追加</button>
                </div>
            </form>            
        </h1>
        <p>
            <div class="background">
                テスト
            </div>
        </p>
        {{-- ここまで --}}
    </body>
</html>