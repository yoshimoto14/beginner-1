@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/register.css')}}">
@endsection

@section('content')
<div class="register-form__content">
    <div class="register-form__heading">
        <h2>会員登録</h2>
    </div>
    <form class="register-form" action="/register" method="post">
        @csrf
        <div class="register-form__item">
            <input class="register-form__item-input" type="text" name="name" placeholder="名前">
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input" type="email" name="email" placeholder="メールアドレス">
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input" type="password" name="password" placeholder="パスワード">
        </div>
        <div class="register-form__item">
            <input class="register-form__item-input" type="password" name="password_confirmation" placeholder="確認用パスワード">
        </div>
        <div class="register-form__button">
            <button class="register-form__button-submit" type="submit">会員登録</button>
        </div>
    </form>
    <div class="screen-movement">
        <p class="screen-movement__text">アカウントをお持ちの方はこちらから</p>
        <a class="screen-movement__link" href="/login">ログイン</a>
    </div>
</div>
@endsection