@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['title' => $technologies->seo_title, 'description' => $technologies->seo_description, 'keywords' => $technologies->seo_keywords])
    <section class="content-wrap" data-page="technologies">
        <div class="technologies">
            <h1 class="technologies__block-title">{{$technologies->title}}</h1>
            <div class="technologies__subtitle-text">{!! $technologies->text !!}</div>
            <div class="technologies__list trowelling-block">
                @php
                    $i = 0;
                    $count = $technologies->technologies_group->count();
                    $first_col = ceil($count / 3);
                    $second_col = $first_col + ceil(($count - $first_col) / 2);
                    $third_col = $count;
                @endphp
                @foreach($technologies->technologies_group as $item)
                    @php $i++ @endphp
                    @if( $i == 1 or $i == $first_col+1 or $i == $second_col+1 )
                        <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list"> @endif
                            <li class="vertical-list__item technologies-item @if( $i <= $first_col ) movable @endif">
                                <a href="/technology/{{$item->slug}}" class="technologies-item__link">
                                    <div class="technologies-item__img-wrap">
                                        <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}"
                                             alt="{{$item->preview->alt}}" class="technologies-item__img">
                                    </div>
                                    <h3 class="technologies-item__title"><span
                                                class="technologies-item__link-text">{{$item->tech_name}}</span></h3>
                                </a>
                                <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                            </li>
                            @if($i == $first_col or $i == $second_col or $i == $third_col) </ul> @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
