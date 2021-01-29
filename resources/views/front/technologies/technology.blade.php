@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', [
    'title' => $technology->seo_title ?: $technology->tech_name . ' в клинике эстетической медицины в Алматы, цена, отзывы, скидки | MEDSTYLE',
    'description' => $technology->seo_description ?: $technology->tech_name . ' - Лучшая цена, скидки от Medstyle ✅ Запись на прием к врачу онлайн ☎️: ' . $all_site->phone . ' ✅ Новые технологии ✅ Алматы, Казахстан.',
    'keywords' => $technology->seo_keywords ?: $technology->tech_name . ', технология, косметология, клиника, Medstyle, Алматы, Казахстан'
])
    <div class="grid margin">
        <div class="col-1-1 head">
            <div class="head-section">
                <h1 class="product-title product-title--mobile">{{$technology->tech_name}}</h1>
                <div class="head-img-wrap head-img-wrap--mobile">
                    <img src="{{$technology->img->link}}?{{$technology->img->cache_index}}" alt="{{$technology->img->alt}}" class="head-img">
                </div>
                <div class="information-block">
                    <p class="product-title product-title--desktop">{{$technology->tech_name}}</p>
                </div>
            </div>
        </div>
    </div>
    <article class="content" data-page="technology" itemscope itemtype="http://schema.org/Service">
        <div class="all-product category category--technologie">
            <select class="all-techno">
                <option value="" selected>Все технологии</option>
                @foreach($technologies->technologies_group as $item)
                    <option value="/technology/{{$item->slug}}">{{$item->tech_name}}</option>
                @endforeach
            </select>
        </div>
        <div class="grid grid--technologie content text-block">
            <div class="col-1-2">
                <div class="first-paragraph">@if($technology->descr_1 !== '<p><br></p>'){!! $technology->descr_1 !!}@endif</div>
            </div>
            <div class="col-1-2">
                @if($technology->right_side_1 != '' && $technology->right_side_1 != '<p><br></p>')
                <div class="interest">
                    {!! $technology->right_side_1 !!}
                </div>
                @endif
            </div>
        </div>
        @if( $technology->tech_pokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            Показания
                        </p>
                        <ul class="list">
                            @foreach($technology->tech_pokazania_group as $item)
                                <li class="item">{{$item->p_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $technology->tech_protivopokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block protiv">
                        <p class="title">
                            Противопоказания
                        </p>
                        <ul class="list">
                            @foreach($technology->tech_protivopokazania_group as $item)
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
            "@id": "/technology",
            "name": "Наши технологии"
            }
          },
          {
          "@type": "ListItem",
          "position": 3,
          "item":
           {
             "@id": "/technology/{{$technology->slug}}",
             "name": "{{$technology->tech_name}}"
           }
          }
         ]
        }
    </script>

    @include('front.common.offers-row')

@endsection
