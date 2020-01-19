@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $helpful->seo_title, 'description' => $helpful->seo_description, 'keywords' => $helpful->seo_keywords])
<section class="content-wrap" data-page="technologies">
    <div class="technologies">
        <h1 class="technologies__block-title">{{$helpful->title}}</h1>
        <div class="technologies__list trowelling-block">
            @php $i = 0 @endphp
            <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list js_first_list">
                @foreach($helpful->helpful_group as $item)
                    @if($i === 0 || $i % 3 === 0)
                        <li class="vertical-list__item technologies-item js_first_list_item js_list_item" style="order: {{$i}}" data-index="{{$i}}">
                            <a href="{{$item->slug}}" class="technologies-item__link">
                                <div class="technologies-item__img-wrap">
                                    <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">
                                </div>
                                <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->tech_name}}</span></h3>
                            </a>
                            <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                        </li>
                    @endif
                    @php $i++ @endphp
                @endforeach
            </ul>
            @php $i = 0 @endphp
            <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list js_second_list">
                @foreach($helpful->helpful_group as $item)
                    @if($i === 1 || ($i - 1) % 3 === 0)
                        <li class="vertical-list__item technologies-item js_second_list_item js_list_item" style="order: {{$i}}" data-index="{{$i}}">
                            <a href="{{$item->slug}}" class="technologies-item__link">
                                <div class="technologies-item__img-wrap">
                                    <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">
                                </div>
                                <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->tech_name}}</span></h3>
                            </a>
                            <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                        </li>
                    @endif
                    @php $i++ @endphp
                @endforeach
            </ul>
            @php $i = 0 @endphp
            <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list js_third_list">
                @foreach($helpful->helpful_group as $item)
                    @if($i === 2 || ($i - 2) % 3 === 0)
                        <li class="vertical-list__item technologies-item js_third_list_item js_list_item" style="order: {{$i}}" data-index="{{$i}}">
                            <a href="{{$item->slug}}" class="technologies-item__link">
                                <div class="technologies-item__img-wrap">
                                    <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">
                                </div>
                                <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->tech_name}}</span></h3>
                            </a>
                            <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                        </li>
                    @endif
                    @php $i++ @endphp
                @endforeach
            </ul>
        </div>
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
             "@id": "/helpful",
             "name": "Новинки"
           }
          }
         ]
        }
    </script>
</section>
@endsection
