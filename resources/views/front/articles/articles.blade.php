@extends('front.layout')
@include('front.menu')
@section('content')
{{--@include('front.meta', ['title' => $articles->seo_title, 'description' => $articles->seo_description, 'keywords' => $articles->seo_keywords])--}}
    <section class="content-wrap" data-page="technologies">
        <div class="technologies">
            <h1 class="technologies__block-title">{{$articles->title}}</h1>
            <div class="technologies__subtitle-text">{!! $articles->text !!}</div>
            <div class="technologies__list trowelling-block">
                @php
                $i = 0;
                $count = $articles->articles_group->count();
                $first_col = ceil($count / 3);
                $second_col = $first_col + ceil(($count - $first_col) / 2);
                $third_col = $count;
                @endphp
                @foreach($articles->articles_group as $item)
                    @php $i++ @endphp
                    @if( $i == 1 or $i == $first_col+1 or $i == $second_col + 1 ) <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list"> @endif
                    <li class="vertical-list__item technologies-item @if( $i <= $first_col ) movable @endif">
                        <a href="/articles/{{$item->slug}}" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->articles_name}}</span></h3>
                        </a>
                        <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                    </li>
                    @if($i == $first_col or $i == $second_col or $i == $third_col) </ul> @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
