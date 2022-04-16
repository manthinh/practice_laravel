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
        <h1>新規登録表示ページ</h1>
    </center>


    {{-- @foreach ($tweets as $tweet)    
        <div>{{ $tweet->text }} : {{ $tweet->created_at->format('Y年m月d日')}}</div>
    @endforeach
    <hr>
    @foreach ($tweets as $tweet)
    <div>
        <span>{{ $tweet->text }}</span>
        <span>{{ $tweet->created_at->format('Y年m月d日')}}</span>
    </div>    
    @endforeach
    <hr>
    @foreach ($tweets as $tweet)
    <div class="flex">
        <div>{{ $tweet->text }}</div>
        <div>{{ $tweet->created_at->format('Y年m月d日')}}</div>
    </div>    
    @endforeach
    <hr>
    @foreach ($tweets as $tweet)
    <dl>
        <dt>
            {{ $tweet->text }}
        </dt>
        <dd>
            {{ $tweet->created_at->format('Y年m月d日')}}
        </dd>
    </dl>
    <div>
    </div>    
    @endforeach --}}
    <center>
    <hr>
    <table>
        <thead>
            <tr>
                <th colspan="2">Tweet集</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tweets as $tweet)
            <tr>
                <th>{{ $tweet->text }}</th>
                <td><a href="/tweet_view/detail/{{$tweet->id}}"><button type="button" class="btn btn-success">詳細</button></a></td>
                <td><a href="/tweet_view/edit/{{$tweet->id}}"><button type="button" class="btn btn-primary">編集</button></a></td>
                <td>{{ $tweet->created_at->format('Y年m月d日')}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </center>
    </body>
</html>