@extends('layouts.parent')
@section('title', '検索')
@section('content')
    <div class=over-wrap-loader>
        <div class="lds-ring"><div></div><div></div><div></div><div></div></div>
    </div>

            <div class="shop-search">
                <div class="shop-search-img">
                </div>
                <form class="shop-search-form" method="GET" action="{{route('search')}}">

                            <div class="shop-search-form01">
                                <p class="bold">半径</p>
                                <select name="range">
                                    <option value="1">300m</option>
                                    <option value="2">500m</option>
                                    <option value="3">1000m </option>
                                    <option value="4">2000m</option>
                                    <option value="5">3000m</option>
                                </select>
                            </div>
                            <input type="text" name="lat" id="lat">
                            <input type="text" name="lng" id="lng">
                            <input type="text" name="start" id="start" value="">
                            <div class="search-btn">
                                <input type="submit" value="検索する">
                            </div>
                </form>
            </div>
            <script src="{{ asset('/js/setLocation.js') }}"></script>
@endsection