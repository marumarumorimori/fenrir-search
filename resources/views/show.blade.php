@extends('layouts.parent')
@section('title', '検索')
@section('content')
            <h2>店舗詳細</h2>
            <div class="detail-shop">
                <h3>{{{ $restaurant['shop'][0]['name'] }}}</h3>
                <div class="detail-shop-img">
                    <img src="{{{ $restaurant['shop'][0]['photo']['pc']['l'] }}}" alt="">
                </div>
                <div class="detail-shop-text">
                    <div>
                        <p class="bold">住所</p>
                        <p>{{{ $restaurant['shop'][0]['address'] }}}</p>
                    </div>

            </div>

            <button type="button" onClick="history.back()">戻る</button>

@endsection