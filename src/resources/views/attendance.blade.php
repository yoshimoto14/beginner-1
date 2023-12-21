@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('css/attendance.css')}}">
@endsection

@section('content')
<div class="attendance-form__content">
    <div class="attendance-form__heading">
        <h2>&lt; 
            <?php
            $date = new DateTime();
            echo $date->format('Y-m-d'); ?>
            &gt;</h2>
    </div>
    <div class="attendance-table">
        <table class="attendance-table__inner">
            <tr class="attendance-table__row">
                <th class="attendance-table__header">名前</th>
                <th class="attendance-table__header">勤務開始</th>
                <th class="attendance-table__header">勤務終了</th>
                <th class="attendance-table__header">休憩開始</th>
                <th class="attendance-table__header">休憩終了</th>
            </tr>
            <tr class="attendance-table__row">
                <td class="attendance-table__item">
                    <form class="attendance-form" action="">
                        <div class="attendance-form__item">
                            <input class="attendance-form__item-input" type="text">
                        </div>
                        <div class="attendance-form__item">
                            <input class="attendance-form__item-input" type="text">
                        </div>
                        <div class="attendance-form__item">
                            <input class="attendance-form__item-input" type="text">
                        </div>
                        <div class="attendance-form__item">
                            <input class="attendance-form__item-input" type="text">
                        </div>
                        <div class="attendance-form__item">
                            <input class="attendance-form__item-input" type="text">
                        </div>
                    </form>
                </td>
            </tr>
        </table>
    </div>
</div>
@endsection
