@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/index.css')}}">
@endsection

@section('content')
<div class="stamping-form__content">
    <div class="stamping-form__heading">
        <h2>福場凛太郎さんお疲れ様です！</h2>
    </div>
    <div class="stamping-button">
        <form class="form" action="">
            <div class="form__button">
                <button class="form__button-submit" type="submit">勤務開始</button>
            </div>
        </form>
        <form class="form" action="">
            <div class="form__button">
                <button class="form__button-submit" type="submit">勤務終了</button>
            </div>
        </form>
        <form class="form" action="">
            <div class="form__button">
                <button class="form__button-submit" type="submit">休憩開始</button>
            </div>
        </form>
        <form class="form" action="">
            <div class="form__button">
                <button class="form__button-submit" type="submit">休憩終了</button>
            </div>
        </form>
    </div>
</div>
@endsection