@push('css')
    <link href="{{ asset('css/detail.css') }}" rel="stylesheet">
@endpush
@extends('layouts.parent')
@section('title', '詳細')
@section('content')
    <div class="detail-shop">
        <div class="detail-shop-img">
            <img src="{{{ $restaurant['shop'][0]['photo']['pc']['l'] }}}" alt="">
        </div>
        <div class="detail-shop-text">
            <h3>{{{ $restaurant['shop'][0]['name'] }}}</h3>
            <div>
                <p class="bold">住所</p>
                <p>{{ $restaurant['shop'][0]['address'] }}</p>
            </div>
            <div>
                <p class="bold">営業時間</p>
                <p>{{ $restaurant['shop'][0]['open'] }}</p>
            </div>
        </div>
    </div>
    <div class="more-detail-shop">
        <h4>詳細情報</h4>
        <table>
            <tr>
                <th>予算</th>
                <td>{{ $restaurant['shop'][0]['budget']['name'] }}</td>
            </tr>
            <tr>
                <th>カード</th>
                <td>{{ $restaurant['shop'][0]['card'] }}</td>
            </tr>
            <tr>
                <th>禁煙席</th>
                <td>{{ $restaurant['shop'][0]['non_smoking'] }}</td>
            </tr>
            <tr>
                <th>wifi</th>
                <td>{{ $restaurant['shop'][0]['wifi'] }}</td>
            </tr>
        </table>
    </div>
    <div class="index-btn">
        <a onClick="history.back()">店舗一覧へ戻る</a>
    </div>
@endsection