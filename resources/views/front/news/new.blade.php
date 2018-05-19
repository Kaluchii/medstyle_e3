@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['meta_description' => $new->seo_description_field, 'meta_keywords' => $new->seo_keywords_field])
    <?php $title = $new->page_title_field ?>

    <div class="grid akcii">
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="/images/{{$new->desktop_background_image->primary_link}}" alt="" class="head-img desctop">
                    <img src="/images/{{$new->mobile_background_image->primary_link}}" alt="" class="head-img mobile">
                </div>
            </div>
        </div>
    </div>


    <article class="content akcii-content" itemscope itemtype="http://schema.org/Service">

        <div class="grid content margin">
            <div class="col-1-2">
                <div class="first-paragraph akcii">
                    {!! $new->content_field !!}
                    @if($new->service_sale_group->count() >= 1)
                    <p class="title">Процедуры со скидкой:</p>
                    <ul class="service-list">
                        @foreach($serv as $s_item)
                            @foreach($new->service_sale_group as $item)
                                @if($s_item->id_field == $item->serv_id_field)
                                    <li class="service-item"><a  href="/service/{{$s_item->slug_field}}">{{$s_item->name_field}}</a></li>
                                @endif
                            @endforeach
                        @endforeach
                    </ul>
                    @endif
                </div>
            </div>
            <div class="col-1-2">
                <div class="shares-block">
                    <img src="/images/{{$new->right_block_image->primary_link}}" alt="">
                </div>
            </div>
        </div>

        <div class="grid content con-4">
            <div class="col-1-2">
                <span class="head-reiting">Пожалуйста, оцените наш материал:</span>
                <div class="raiting-star" data-entity="{{$new->group_name_field}}" data-id="{{$new->id_field}}">
                    <ul class="star-rating-default" style="width:125px">
                        <li class="current-rating" style="width:{{$raiting['proc']}}%;">{{$raiting['sred']}}</li>
                        <li class="star">
                            <a class="star-link" data-raiting="1" title="1/5" style="width:20%;z-index:6"
                               rel="nofollow">1</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="2" title="2/5" style="width:40%;z-index:5"
                               rel="nofollow">2</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="3" title="3/5" style="width:60%;z-index:4"
                               rel="nofollow">3</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="4" title="4/5" style="width:80%;z-index:3"
                               rel="nofollow">4</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="5" title="5/5" style="width:100%;z-index:2"
                               rel="nofollow">5</a>
                        </li>
                    </ul>
                    <span class="totalvotes" itemprop="aggregateRating" itemscope="itemscope" itemtype="http://schema.org/AggregateRating">
                    <meta itemprop="ratingValue" content="{{$raiting['sred']}}">Текущий рейтинг — {{$raiting['sred']}}
                        <meta itemprop="bestRating" content="5">
                    <meta itemprop="ratingCount" content="{{$raiting['count']}}"> ({{$raiting['count']}} человек)
                    </span>
                </div>
            </div>
        </div>
        <div class="grid content bottom-border">
            <div class="border-top"></div>
            <p>Расскажите друзьям, если это будет им полезно</p>
            <div class="ya-share2" data-services="vkontakte,facebook" data-counter=""></div>
        </div>
        @include('front.specials')
        <div class="special-block-padding-top">
            @yield('special')
        </div>
    </article>

@endsection