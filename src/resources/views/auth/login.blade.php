@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/login.css')}}">
@endsection

@section('content')
<div class="login-form__content">
    <div class="login-form__heading">
        <h2>ログイン</h2>
    </div>
    <form class="login-form" action="/login" method="post">
        @csrf
        <div class="login-form__item">
            <input class="login-form__item-input" type="email" name="email" placeholder="メールアドレス">
        </div>
        <div class="login-form__item">
            <input class="login-form__item-input" type="password" name="password" placeholder="パスワード">
        </div>
        <div class="login-form__button">
            <button class="login-form__button-submit" type="submit">ログイン</button>
        </div>
    </form>
    <div class="screen-movement">
        <p class="screen-movement__text">アカウントをお持ちでない方はこちらから</p>
        <a class="screen-movement__link" href="/register">会員登録</a>
    </div>
</div>
@endsection