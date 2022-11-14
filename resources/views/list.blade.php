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

    <?php
        $page_num = ceil($restaurants['results_available']/$count);
        $current_page = ceil($restaurants['results_start']/$count);
        $display_page = 5;
        $begin_page = 1;
        $finish_page = $display_page;
        $center_page=floor($display_page / 2);
        $prev = max(($current_page - 2) * $count + 1 , 1);
        $next = min(($current_page) * $count + 1 , ($page_num - 1) * $count + 1);
    ?>
    @if($current_page > $center_page)
        <?php
            $begin_page = $current_page - $center_page;
            $finish_page = $current_page +$center_page;
        ?>
    @endif
    <?php $finish_page = min($page_num , $finish_page); ?>
    <div class="pagination__wrapper">
        <nav class="pagination">
            <ul class="page-numbers">
                <li><a href="{{route('search', [ 'range' => $range ,'lat' => $lat,'lng' => $lng,'start' => $prev])}}" class="pagination-next page-numbers"><i class="fa fa-chevron-left"></i></a></li>
                    @for ($i = $begin_page; $i <= $finish_page; $i++)
                        <?php $page_start = $count * ($i - 1) + 1; ?>
                        @if($i == $current_page )
                            <li><span aria-current="page" class="page-numbers pagenation-current"><?php echo $i; ?></span></li>
                        @else
                            <li class="page-numbers"><a href="{{route('search', [ 'range' => $range ,'lat' => $lat,'lng' => $lng,'start' => $page_start])}}"><?php echo $i; ?></a></li>
                        @endif
                    @endfor
                <li><a href="{{route('search', [ 'range' => $range ,'lat' => $lat,'lng' => $lng,'start' => $next])}}" class="pagination-next page-numbers"><i class="fa fa-chevron-right"></i></a></li>
            </ul>
        </nav>
    </div>
@endsection