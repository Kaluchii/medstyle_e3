@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $service->seo_description_field, 'meta_keywords' => $service->seo_keywords_field])
    <?php $title = $service->page_title_field ?>
    @if($service->slug_field == 'диспорт')
        @include('front.page_close')
    @endif
    <div class="grid @if($service->discount_comment_field == '') margin @endif">
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap">
                    @if($service->over_background_image->primary_link != '')
                        <img src="/images/{{$service->over_background_image->primary_link}}" alt="" class="head-img over">
                    @endif
                    <img src="/images/{{$service->background_image->primary_link}}" alt="" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title @if($service->is_white_field) white  @endif">{{$service->name_field}}</h1>
                    <div class="all-product">
                        <a href="#serv-popup" class="popup-changer all_serv">Все услуги <span class="treangle">▼</span></a>
                    </div>
                    <div class="social-buttons">
                        <div class="ya-share2" data-services="vkontakte,facebook" data-counter=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @if($service->discount_comment_field != '')
        <div class="discount-block">
            <div class="discount-text">
                <p>{{$service->discount_comment_field}}</p>
            </div>
        </div>
    @endif
    <article class="content" data-page="service" itemscope itemtype="http://schema.org/Service">

        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">
                    {!! $service->descr_1_field !!}
                </div>
            </div>
            <div class="col-1-2 fr-1 service-right-col">
                    <div class="interest">
                        <h2>Индивидуальный тест</h2>
                        <br>
                        <p>Чтобы помочь вам с выбором процедуры, специалисты «Медстайла» разработали несложный тест.</p>
                        <br>
                        <br>
                        <a href="/age" class="go-to-test right-side">Пройти тест</a>
                        <br>
                        <br>
                    </div>
            </div>
        </div>
        <div class="grid content con-2">
            <div class="col-1-2">
                <div class="overall">
                    {!! $service->descr_2_field !!}
                </div>
            </div>
            <div class="col-1-2 fr-2  service-right-col">
                @if( $service->right_side_1_field != '')
                    <div class="interest">
                        {!! $service->right_side_1_field !!}
                    </div>
                @endif
            </div>
        </div>
        {{--
        <div class="grid content con-3">
            <div class="col-1-1"><img src="/images/{{$service->big_pict_image->primary_link}}" alt="Большое фото" class="big-image"></div>
        </div>
        --}}
        <div class="grid content con-2">
            <div class="col-1-2">
                <div class="overall">
                    {!! $service->descr_3_field !!}
                </div>
            </div>
            @if($service->right_side_2_field != '')
                <div class="col-1-2 service-right-col">
                    <div class="interest">
                        {!! $service->right_side_2_field !!}
                    </div>
{{--                    {!! $service->right_side_3_field !!}--}}
                </div>
            @endif
        </div>
        @if($service->serv_slider_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <ul class="service_slider">
                        @foreach($service->serv_slider_group as $item)
                            <li><img src="/images/{{$item->slide_image->primary_link}}" alt=""></li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        <div class="grid content con-4">
            <div class="col-1-2 int"></div>
        </div>
        @if( $service->serv_pokazania_group->count() > 0 )
            <div class="grid content con-4 list-padding">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            Показания
                        </p>
                        <ul class="list">
                            @foreach($service->serv_pokazania_group as $item)
                                <li class="item">{{$item->p_name_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $service->serv_after_proc_group->count() > 0 )
            <div class="grid content con-4 list-padding">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            После процедуры
                        </p>
                        <ul class="list">
                            @foreach($service->serv_after_proc_group as $item)
                                <li class="item">{{$item->p_name_field}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $service->serv_protivopokazania_group->count() > 0 )
            <div class="grid content con-4 list-padding">
                <div class="col-1-2">
                    <div class="black-block protiv">
                        <p class="title">
                            Противопоказания
                        </p>
                        <ul class="list">
                            @foreach($service->serv_protivopokazania_group as $item)
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
                <div class="raiting-star" data-entity="{{$service->group_name_field}}" data-id="{{$service->id_field}}">
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
        </article>
        <div class="phone-and-consult">
            <p class="text-to-phone">Задайте вопрос или запишитесь на процедуру</p>
            <p class="phone-number">+7 (727) 311-31-81</p>
        </div>
        <article class="content">
        @if($service->serv_effect_up_group->count() > 0 )
            {{--<div class="grid content proc-upgrade">--}}
                {{--<div class="col-1-1">--}}
                    {{--<div class="proc-upgrade">--}}
                        {{--<div class="our-block">--}}
                            {{--<p class="title">Эффект процедуры усиливают</p>--}}
                            {{--<p class="text">Применяя процедуры комплексно, вы усилите эффект и продолжительность каждой--}}
                                {{--из них</p>--}}
                            {{--<div class="procedures">--}}
                                <?php $j = 0?>
                                {{--@foreach($service->serv_effect_up_group as $item)--}}
                                    <?php $j++?>
                                    {{--@if ($j == 1)--}}
                                        {{--<div class="left-col">--}}
                                            {{--@elseif( $j == 4)--}}
                                        {{--</div>--}}
                                        {{--<div class="right-col">--}}
                                            {{--@endif--}}
                                            {{--<div class="proc">--}}
                                                {{--<a href="{{$item->link_field}}"--}}
                                                   {{--class="proc">{{$item->serv_name_field}}</a>--}}
                                            {{--</div>--}}
                                            {{--@endforeach--}}
                                        {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="all-product bottom">--}}
                            {{--<a href="#serv-popup" class="popup-changer gray all_serv">Все услуги <span class="treangle">▼</span></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        @endif
        @include('front.specials')
        @yield('special')
    </article>
    @include('front.popups.all_services')
    @yield('all_services')
@endsection
