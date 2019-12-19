@extends('front.layout')
@include('front.menu')
@section('content')
{{--@include('front.meta', ['title' => $articles->seo_title, 'description' => $articles->seo_description, 'keywords' => $articles->seo_keywords])--}}
    <section class="content-wrap" data-page="articles">
        <div class="grid grig--mobile margin">
            <div class="col-1-1 head">
                <div class="head-section">
                    <h1 class="product-title product-title--mobile">{{$articles->title}}</h1>
                    <div class="head-img-wrap head-img-wrap--mobile">
                        @if($articles->img->link != '')
                            <img src="{{$articles->img->link}}?{{$articles->img->cache_index}}" alt="{{$articles->img->alt}}" class="head-img over">
                        @endif
                            <img src="{{$articles->bg_img->link}}?{{$articles->bg_img->cache_index}}" alt="{{$articles->bg_img->alt}}" class="head-img">
                    </div>
                    <div class="information-block">
                        <h1 class="product-title product-title--desktop">{{$articles->title}}</h1>
                    </div>
                </div>
            </div>
        </div>

        <div class="technologies">

{{--            <h1 class="technologies__block-title">{{$articles->title}}</h1>--}}
{{--            <div class="technologies__subtitle-text">{!! $articles->text !!}</div>--}}
{{--            <div class="technologies__list trowelling-block">--}}
{{--                @php--}}
{{--                $i = 0;--}}
{{--                $count = $articles->articles_group->count();--}}
{{--                $first_col = ceil($count / 3);--}}
{{--                $second_col = $first_col + ceil(($count - $first_col) / 2);--}}
{{--                $third_col = $count;--}}
{{--                @endphp--}}
{{--                @foreach($articles->articles_group as $item)--}}
{{--                    @php $i++ @endphp--}}
{{--                    @if( $i == 1 or $i == $first_col+1 or $i == $second_col + 1 ) <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list"> @endif--}}
{{--                    <li class="vertical-list__item technologies-item @if( $i <= $first_col ) movable @endif">--}}
{{--                        <a href="/articles/{{$item->slug}}" class="technologies-item__link">--}}
{{--                            <div class="technologies-item__img-wrap">--}}
{{--                                <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">--}}
{{--                            </div>--}}
{{--                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->articles_name}}</span></h3>--}}
{{--                        </a>--}}
{{--                        <div class="technologies-item__text">{!! $item->preview_descr !!}</div>--}}
{{--                    </li>--}}
{{--                    @if($i == $first_col or $i == $second_col or $i == $third_col) </ul> @endif--}}
{{--                @endforeach--}}
{{--            </div>--}}
            <div class="articles__wrap">
                <ul class="articles__list">
                    @foreach($articles->articles_group as $item)
                        <li class="articles__item">
                            <a href="/articles/{{$item->slug}}" class="technologies-item__title articles__link link--main">{{$item->articles_name}}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="articles__individual-test individual-test">
                    <p class="individual-test__title">Индивидуальный тест</p>
                    <p class="individual-test__text">
                        Чтобы помочь вам с выбором процедуры, специалисты «Медстайла» разработали несложный тест.
                    </p>
                    <div class="individual-test__link-wrap">
                        <a href="/age" class="individual-test__link go-to-test right-side grad-btn grad-btn--small">Пройти тест</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
