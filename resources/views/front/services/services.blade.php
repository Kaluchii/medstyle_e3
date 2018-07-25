@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $services->seo_title, 'description' => $services->seo_description, 'keywords' => $services->seo_keywords])
    <section class="content-wrap" data-page="services">
        <div class="services-page" style="background: url('/img/molecula.jpg') no-repeat right top;">
            <div class="services-page__content-wrap">
                <h1 class="services-page__block-title">{{$services->title}}</h1>
                <div class="test-block">
                    <p class="test-block__text">Чтобы помочь вам с выбором процедуры, мы разработали несложный тест</p>
                    <a href="/age" onClick="ga('send','event','Button','Click','Uslugi');" class="test-block__button">Пройти тест</a>
                </div>
                <div class="services-page__category-list trowelling-block">
                    @php $i = 0;
                         $c_1 = $services->count_1;
                         $c_2 = $services->count_2;
                         $c_3 = $services->count_3;
                         $cat_count = 7;
                    @endphp
                    @foreach($services->serv_category_group as $item_category)
                        @if( $i == 0 or $i == $c_1 or $i == ($c_1 + $c_2) ) <ul class="trowelling-block__list trowelling-block__list--services vertical-list"> @endif
                            <li class="vertical-list__item category-item @if( $i > $c_2 ) movable @endif">
                                <h3 class="category-item__title" id="{{$item_category->cat_name}}">{{$item_category->cat_name}}</h3>
                                <ul class="category-item__services-list strings-list">
                                    @foreach($item_category->services_group as $item_service)
                                        @if($item_service->slug != 'диспорт')
                                            <li class="strings-list__item"><a href="/service/{{$item_service->slug}}" class="strings-list__link pink-link">{{$item_service->serv_name}}</a><span class="strings-list__stock">{{$item_service->discount_common}}</span></li>
                                        @endif
                                    @endforeach
                                </ul>
                            </li>
                        @if( $i == ($c_1 - 1) or $i == ($c_1 + $c_2 - 1) or ($cat_count - 1) ) </ul> @endif

                        @if( $i == 0 or $i == 1 or $i == 3 ) @endif
                        @if( $i == 0 or $i == 2 or $i == 5 ) @endif
                        @php $i++ @endphp
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
