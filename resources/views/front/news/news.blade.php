@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <article class="content akcii" data-page="stock">
        {{--<div class="content-head">--}}
        {{--<h1 class="content-head-title spec">{{$static->title_field}}</h1>--}}
        {{--<div class="grid grid-pad head-grid">--}}
        {{--<div class="col-1-2 text-block">--}}
        {{--{!! $static->descriptions_field !!}--}}
        {{--</div>--}}
        {{--<div class="col-1-2">--}}
        {{--</div>--}}
        {{--</div>--}}
        {{--</div>--}}
        <div class="grid grid-pad akcii flex-grid">

            <?php $i= 0;
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
            ?>
            <div class="rows">
                @foreach($dom->special_offers_group as $item)
                    <?php $i++; ?>
                    @if($i <= 3)
                        <div class="row">
                            <div class="col-9-12">
                                <h2 class="shares-name">
                                    <?php $link = wrap_in_link($item->prev_name_field, $item->slug_field); ?>
                                    {!! $link !!}
                                </h2>
                                <div class="shares-description text-block">{!! $item->prev_text_field !!}</div>
                                <p class="shares-date">{{$item->all_text_field}}</p>
                            </div>
                            <div class="col-3-12">
                                <a href="{{$item->slug_field}}" class="shares-link">
                                    <img src="/images/{{$item->prev_image->primary_link}}?{{$item->prev_image->cache_index}}" alt="">
                                </a>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            <div class="stock-info">
                <div class="stock-social">
                    <img src="/img/stock-social.png" alt="" class="stock-social-img">
                    <p class="stock-social-descr">Получайте акции через WhatsApp по номеру <span class="no-br">+7 777 178-29-26</span>
                        или через <a target="_blank" href="//facebook.com/medstyle.kz" class="stock-social-link">Facebook</a> и <a target="_blank" href="https://www.instagram.com/medstyle_almaty/" class="stock-social-link">Instagram</a></p>
                </div>
            </div>
        </div>
    </article>
@endsection
