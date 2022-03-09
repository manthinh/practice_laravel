<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="stylesheet" href="{{ mix('css/todoIndex.css') }}">
    </head>
 
@section('title', 'ログイン')
 
@section('content')
<p></p>
<h1>ログイン</h1>
<p></p>
 
{{-- エラーメッセージ --}}
@if (isset($login_error))
  <div id="error_explanation" class="text-danger">
    <ul>
      <li>メールアドレスまたはパスワードが一致しません。</li>
    </ul>
  </div>
@endif
<p></p>
 
{{-- フォーム --}}
<form action="{{ url('admin_login') }}" method="post">
  @csrf  
  <div class="form-group">
    <label for="user_email">{{ trans('validation.attributes.email') }}</label>
    <input type="text" class="form-control" id="user_email" name="email">
  </div>     
  <div class="form-group">
    <label for="user_password">{{ trans('validation.attributes.password') }}</label>
    <input type="password" class="form-control" id="user_password" name="password">
  </div>     
  <input type="submit" value="ログインする" class="btn btn-primary">  
</form>  
<p><br></p>
@endsection



