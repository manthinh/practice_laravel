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
        <h1 class="color">
            <textarea class="form" placeholder="To doを入力"></textarea>
            <a href="http://localhost:8080/post">
                <button class="button">新規作成</button>
            </a>
        </h1>
        
        <p>
            <div class="paragraph">
            <h1 class="middle">未完了のtodo</h1>
            <h2>
            ・Todoです <button class="button">完了</button> <button class="button">削除</button>
            <br>・fdfasfaf <button class="button">完了</button> <button class="button">削除</button>
            <br>・dsdsdsf <button class="button">完了</button> <button class="button">削除</button>
            </h2>
            </div>
        </p>
        <p>
            <div class="paragraph2">
                <h1 class="bottom">完了したtodo</h1>
                ・todoでした　<button class="button">戻す</button>
            </p>
    </body>
            {{-- ここまで
             </body>
{{-- </html> --}}  --}}