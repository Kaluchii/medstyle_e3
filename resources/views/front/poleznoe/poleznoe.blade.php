@extends('front.layout')
@include('front.menu')
@include('front.meta', ['meta_description' => $polez->seo_description_field, 'meta_keywords' => $polez->seo_keywords_field])
    <?php $title = $polez->page_title_field ?>

@section('content')
    <div class="grid margin">
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="/images/{{$polez->background_image->primary_link}}" alt="" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title @if($polez->is_white_field) white @endif">{{$polez->name_field}}</h1>

                    <div class="social-buttons">
                        <div class="ya-share2" data-services="vkontakte,facebook" data-counter=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <article class="content" >

        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">
                    {!! $polez->descr_1_field !!}
                </div>
            </div>
            <div class="col-1-2">
                @if($polez->right_side_1_field != '')
                <div class="interest">
                    {!! $polez->right_side_1_field !!}
                </div>
                @endif
            </div>
        </div>
        @if( $polez->polez_pokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            После процедуры
                        </p>
                        <ul class="list">
                            @foreach($polez->polez_pokazania_group as $item)
                                <li class="item">{{$item->p_name_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $polez->polez_protivopokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block protiv">
                        <p class="title">
                            Противапоказания
                        </p>
                        <ul class="list">
                            @foreach($polez->polez_protivopokazania_group as $item)
                                <li class="item">{{$item->p_name_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        <div class="grid content con-4">
            <div class="col-1-2">
                <span class="head-reiting">Пожалуйста, оцените наш материал:</span>
                <div class="raiting-star" data-entity="{{$polez->group_name_field}}" data-id="{{$polez->id_field}}">
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
        @include('front.specials')
        <div class="special-block-padding-top">
            @yield('special')
        </div>
    </article>

@endsection