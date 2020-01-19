@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $videos->seo_title, 'description' => $videos->seo_description, 'keywords' => $videos->seo_keywords])
    <section class="content-wrap">
        <div class="video-block">
            <h1 class="video-block__title">{{$videos->title}}</h1>
            <p class="video-block__text">{{$videos->text}}</p>
            <ul class="video-block__list">
                <li class="video-block__item video-item">
                    <div class="video-item__video-wrap">
                        <div class="video-item__video video_player"
                             data-link="{{$videos->video_link}}"
                             data-preview="{{$videos->img->link}}?{{$videos->img->cache_index}}">
                        </div>
                    </div>
                    <div class="video-item__name-wrap">
                        <a href="{{$videos->service_link}}" target="_blank" class="video-item__video-name pink-link">{{$videos->video_name}}</a>
                    </div>
                </li>
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

            <div class="video-block__mobile-videos mobile-videos">
                <div class="mobile-videos__titular-video">
                    <a href="{{$videos->video_link}}" class="mobile-videos__titular-preview-wrap">
                        <img src="{{$videos->img->link}}?{{$videos->img->cache_index}}" alt="{{$videos->img->alt}}" class="mobile-videos__titular-preview">
                    </a>
                    <div class="mobile-videos__name-wrap mobile-videos__name-wrap--titular">
                        <a href="{{$videos->video_link}}" target="_blank" class="mobile-videos__video-name pink-link">{{$videos->video_name}}</a>
                    </div>
                    <p class="mobile-videos__subtitle">{!! $videos->subtitle !!}</p>
                </div>
                <ul class="mobile-videos__list">
                    @foreach($videos->videos_group as $item)
                    <li class="mobile-videos__item">
                        <a href="{{$item->video_link}}" class="mobile-videos__preview-wrap">
                            <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="mobile-videos__preview">
                        </a>
                        <div class="mobile-videos__links-wrap">
                            <div class="mobile-videos__name-wrap">
                                <a href="{{$item->video_link}}" target="_blank" class="mobile-videos__video-name pink-link">{{$item->video_name}}</a>
                            </div>
                            <a href="{{$item->service_link}}" class="mobile-videos__service-link">Перейти к услуге</a>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </section>
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
             "@id": "/video",
             "name": "Видео"
           }
          }
         ]
        }
    </script>
@endsection
