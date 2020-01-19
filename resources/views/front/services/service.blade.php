@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $service->seo_title, 'description' => $service->seo_description, 'keywords' => $service->seo_keywords])
    @if($service->slug == 'диспорт')
        @include('front.page_close')
    @endif
    <div class="grid grig--mobile @if($service->discount_in == '') margin @endif">
        <div class="col-1-1 head">
            <div class="head-section">
                <h1 class="product-title product-title--mobile">{{$service->serv_name}}</h1>
                <div class="head-img-wrap head-img-wrap--mobile">
                    @if($service->img->link != '')
                        <img src="{{$service->img->link}}?{{$service->img->cache_index}}" alt="{{$service->img->alt}}" class="head-img over">
                    @endif
                    <img src="{{$service->bg_img->link}}?{{$service->bg_img->cache_index}}" alt="{{$service->bg_img->alt}}" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title product-title--desktop">{{$service->serv_name}}</h1>
{{--                    <div class="all-product">--}}
{{--                        <a href="#serv-popup" class="popup-changer all_serv">Все услуги <span class="treangle">▼</span></a>--}}
{{--                    </div>--}}
                </div>
            </div>
        </div>
    </div>
    @if($service->discount_in != '')
        <div class="discount-block">
            <div class="discount-text">
                <p>{{$service->discount_in}}</p>
            </div>
        </div>
    @endif
    <article class="content" data-page="service" itemscope itemtype="http://schema.org/Service">

        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">@if($service->descr_1 !== '<p><br></p>'){!! $service->descr_1 !!}@endif</div>
            </div>
            <div class="col-1-2 fr-1 service-right-col service-right-col--test">
                    <div class="interest">
                        <h2>Индивидуальный тест</h2>
                        <br>
                        <p>Чтобы помочь вам с выбором процедуры, специалисты «Медстайла» разработали несложный тест.</p>
                        <br>
                        <br>
                        <a href="/age" class="go-to-test right-side grad-btn grad-btn--small">Пройти тест</a>
                        <br>
                    </div>
            </div>
        </div>
        <div class="grid content con-2">
            <div class="col-1-2">
                <div class="overall">@if($service->descr_2 !== '<p><br></p>'){!! $service->descr_2 !!}@endif</div>
            </div>
            <div class="col-1-2 fr-2  service-right-col">
                @if($service->right_side_1 != '' && $service->right_side_1 != '<p><br></p>')
                    <div class="interest">
                        {!! $service->right_side_1 !!}
                    </div>
                @endif
            </div>
        </div>
        <div class="grid content con-2">
            <div class="col-1-2">
                <div class="overall">@if($service->descr_3 !== '<p><br></p>'){!! $service->descr_3 !!}@endif</div>
            </div>
            @if($service->right_side_2 != '' && $service->right_side_2 != '<p><br></p>')
                <div class="col-1-2 service-right-col">
                    <div class="interest">
                        {!! $service->right_side_2 !!}
                    </div>
                </div>
            @endif
        </div>
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
                                <li class="item">{{$item->p_name}}</li>
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
                                <li class="item">{{$item->p_name}}</li>
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
                                <li class="item">{{$item->p_name}}</li>
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
                <div class="raiting-star" data-entity="{{$service->name}}" data-id="{{$service->id}}">
                    <ul class="star-rating-default" style="width:125px">
                        <li class="current-rating" style="width:{{$rating['percent']}}%;">{{$rating['middle']}}</li>
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
                    <meta itemprop="ratingValue" content="{{$rating['middle']}}">Текущий рейтинг — {{$rating['middle']}}
                    <meta itemprop="bestRating" content="5">
                    <meta itemprop="ratingCount" content="{{$rating['count']}}"> ({{$rating['count']}} человек)
                    </span>
                </div>
            </div>
        </div>
        </article>

        <div class="phone-and-consult">
            <p class="text-to-phone">Задайте вопрос или запишитесь на процедуру</p>
            <p class="phone-number">
                <span class="consult-phone phone-link mobile-hide">{{$all_site->phone}}</span>
                <a href="tel:{{str_replace([' ', '(', ')', '-'], '', $all_site->phone)}}" class="consult-phone phone-link desktop-hide">{{$all_site->phone}}</a>
            </p>
        </div>
        <script type="application/ld+json">
            {
             "@context": "http://schema.org",
             "@type": "BreadcrumbList",
             "itemListElement":
             [
              {
               "@type": "ListItem",
               "position": 1,
               "item":
               {
                "@id": "/",
                "name": "Главная"
                }
              },
              {
               "@type": "ListItem",
               "position": 2,
               "item":
               {
                "@id": "/services",
                "name": "Услуги"
                }
              },
              {
              "@type": "ListItem",
              "position": 3,
              "item":
               {
                 "@id": "/service/{{$service->slug}}",
                 "name": "{{$service->serv_name}}"
               }
              }
             ]
            }
        </script>

        @include('front.common.offers-row')

    @include('front.popups.all_services')
    @yield('all_services')
@endsection
