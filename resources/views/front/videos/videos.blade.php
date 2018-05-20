@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $videos->seo_title, 'description' => $videos->seo_description, 'keywords' => $videos->seo_keywords])
    <section class="content-wrap">
        <div class="video-block">
            <h1 class="video-block__title">{{$videos->title}}</h1>
            <p class="video-block__text">{{$videos->text}}</p>
            <ul class="video-block__list">
                @foreach($videos->videos_group as $item)
                    <li class="video-block__item video-item">
                        <div class="video-item__video-wrap">
                            <div class="video-item__video video_player"
                                 data-link="{{$item->video_link}}"
                                 data-preview="{{$item->img->link}}?{{$item->img->cache_index}}">
                            </div>
                        </div>
                        <div class="video-item__name-wrap">
                            <a href="{{$item->service_link}}" target="_blank" class="video-item__video-name pink-link">{{$item->video_name}}</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
@endsection
