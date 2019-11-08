@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $stocks->seo_title, 'description' => $stocks->seo_description, 'keywords' => $stocks->seo_keywords])
    <article class="content akcii" data-page="stock">
        <div class="grid grid-pad akcii flex-grid">
            @php
            function str_replace_once($search, $replace, $text)
            {
                $pos = strpos($text, $search);
                return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
            }
            function wrap_in_link( $str, $slug)
            {
                $astart = '<a href=\'' . $slug . '\' class=\'link\'>';
                $aend = '</a>';
                $str = str_replace_once('#', $astart, $str);
                $str = str_replace_once('#', $aend, $str);
                return $str;
            }
            @endphp
            <div class="rows">
                @foreach($stocks->stocks_group as $item)
                    <div class="row">
                        <div class="col-9-12">
                            <h2 class="shares-name">
                                <a href="{{ $item->link }}" class="link">{{ $item->stock_name }}</a>
                            </h2>
{{--                            <h2 class="shares-name">--}}
{{--                                @php $link = wrap_in_link($item->stock_name, $item->link); @endphp--}}
{{--                                {!! $link !!}--}}
{{--                            </h2>--}}
                            <div class="shares-description text-block">{!! $item->text !!}</div>
                            <p class="shares-date">{{$item->discount}}</p>
                        </div>
                        <div class="col-3-12">
                            <a href="{{$item->link}}" class="shares-link">
                                <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="stock-info">
                <div class="stock-social">
                    <img src="/img/stock-social.png" alt="" class="stock-social-img">
                    <p class="stock-social-descr">Получайте акции через WhatsApp по номеру <span class="no-br">{{$all_site->whatsapp}}</span>
                        или через <a target="_blank" href="{{$all_site->fb}}" class="stock-social-link">Facebook</a> и <a target="_blank" href="{{$all_site->inst}}" class="stock-social-link">Instagram</a></p>
                </div>
            </div>
        </div>
    </article>
@endsection
