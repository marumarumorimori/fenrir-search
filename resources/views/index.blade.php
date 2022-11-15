@push('css')
    <link href="{{ asset('css/search.css') }}" rel="stylesheet">
@endpush
@extends('layouts.parent')
@section('content')
    <div class=over-wrap-loader>
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>
    <div class="shop-search">
        <div class="shop-search-img">
            <img src="{{ asset('/images/fenrir-logo.png')  }}" alt="">
        </div>
        <form class="shop-search-form" method="get" action="{{route('search')}}">
            <div class="shop-search-form01">
                <select name="range">
                    <option value="" selected disabled>現在地からの半径距離を選択してください</option>
                    <option value="1">300m</option>
                    <option value="2">500m</option>
                    <option value="3">1000m </option>
                    <option value="4">2000m</option>
                    <option value="5">3000m</option>
                </select>
                <input type="hidden" name="lat" id="lat">
                <input type="hidden" name="lng" id="lng">
                <input type="hidden" name="start" id="start" value="">
                <input type="submit" value="検索する" class="search-btn">
        </form>
    </div>
<script src="{{ asset('/js/setLocation.js') }}"></script>
@endsection
