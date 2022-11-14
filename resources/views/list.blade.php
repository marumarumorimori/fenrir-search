@push('css')
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">
@endpush
@extends('layouts.parent')
@section('title', '一覧')
@section('content')
    <div class="shop-container">
        <div class="shop-container-text">
            <p>検索結果 <span>{{ $restaurants['results_available'] }}</span>件</p>
        </div>
        @for ($i = 0; $i < $restaurants['results_returned']; $i++)
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
    <?php $page_num = ceil($restaurants['results_available']/$count);?>
    <div class="pagination">
        <ul class="pagination__list">
            @for ($i = 0; $i < $page_num; $i++)
                <?php $current_page = $count * $i + 1; ?>
                <li class="pagination__item"><a href=""><a href="{{route('search', [ 'range' => $range ,'lat' => $lat,'lng' => $lng,'start' => $current_page])}}"><?php echo $i + 1; ?></a></a></li>
            @endfor
        </ul>
    </div>
@endsection