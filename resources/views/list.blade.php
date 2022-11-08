@extends('layouts.parent')
@section('title', '一覧')
@section('content')
<div class="shop-container">

        @for ($i = 0; $i < $restaurants['results_returned']; $i++):
            <div class="shop">
                    <div class="shop-image">
                        <img src="{{{ $restaurants['shop'][$i]['photo']['pc']['l'] }}}" alt="">
                    </div>
                    <div class="shop-text">
                        <h3 class="shop-name">{{{ $restaurants['shop'][$i]['name'] }}}</h3>
                        <div class="shop-info">
                        <p>アクセス</p>
                        <p>{{{ $restaurants['shop'][$i]['access'] }}}</p>
                    </div>

                    <div class="detail-shop-btn-container">
                    <a href="{{ route('show', [ 'id' => $restaurants['shop'][$i]['id']]) }}" class="detail-shop-btn">店舗詳細</a>
                    </div>
                    </div>
                </div>
        @endfor
            </div>
        <div class="pagenation">1 2 3</div>
@endsection