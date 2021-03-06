@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', [
    'title' => $service->seo_title ?: $service->serv_name . ' - клиника эстетической медицины в Алматы,  цена, отзывы, скидки | MEDSTYLE',
    'description' => $service->seo_description ?: $service->serv_name . ' - Лучшая цена, скидки от Medstyle ✅ Запись на прием к врачу онлайн ☎️: ' . $all_site->phone . ' ✅ Квалифицированные специалисты ✅ Алматы, Казахстан.',
    'keywords' => $service->seo_keywords ?: $service->serv_name . ', услуга, врач, косметология, клиника, Medstyle, Алматы, Казахстан'
])
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
                    <p class="product-title product-title--desktop">{{$service->serv_name}}</p>
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
                <div class="overall">
                    @if($service->descr_2 !== '<p><br></p>'){!! $service->descr_2 !!}@endif
                    <ul class="subservices-tiles">
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/sredinnye-pilingi" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-8.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-8-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Срединные пилинги</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/glikolevie-pilingi" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-4.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-4-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Гликолевые пилинги</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/ferulovye-pilingi" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Феруловый пилинг</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/molochnii-piling" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-2.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-2-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Молочный пилинг</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/retinoevii-piling" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-1.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-1-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Ретиноевый пилинг Restises CT-желтый пилинг</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/sesretinal-piling" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-6.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-6-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Оранжевый пилинг ses-retinal</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/cpeel" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-7.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-7-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Вспышка красоты C-peel</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/prxt-terapy" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-5.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-5-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">PRX-T</span>
                                </div>
                            </a>
                        </li>
                        <li class="subservices-tiles__item subservices-tiles__item--without-img">
                            <a href="/service/traneksamovii-piling" class="subservices-tiles__link">
                                <div class="subservices-tiles__img-wrap">
                                    <img src="/img/services-icons/pil-3.svg" alt="" class="subservices-tiles__img subservices-tiles__img--main">
                                    <img src="/img/services-icons/pil-3-h.svg" alt="" class="subservices-tiles__img subservices-tiles__img--hover">
                                </div>
                                <div class="subservices-tiles__name-wrapper">
                                    <span class="subservices-tiles__name">Транексамовый пилинг</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
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
            </div>
        </div>
        </article>

        <div class="phone-and-consult">
            <p class="text-to-phone">Задайте вопрос или запишитесь на процедуру</p>
            <p class="phone-number">
                <span class="consult-phone phone-link mobile-hide">{{$all_site->phone_2}}</span>
                <a href="tel:{{str_replace([' ', '(', ')', '-'], '', $all_site->phone_2)}}" class="consult-phone phone-link desktop-hide" rel="nofollow">{{$all_site->phone_2}}</a>
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
