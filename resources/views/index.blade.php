@extends('layouts.parent')
@section('title', '検索')
@section('content')
            <div class="shop-search">
                <div class="shop-search-img">
                    <img src="img/shop.png" alt="">
                </div>
                <form class="shop-search-form" method="get">
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
                            <div class="search-btn">
                                <input type="submit" value="検索する">
                            </div>
                </form>
            </div>
@endsection