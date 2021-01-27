@extends('front.layout')
@include('front.menu')
@include('front.meta', ['title' => $helpful->seo_title, 'description' => $helpful->seo_description, 'keywords' => $helpful->seo_keywords])
@section('content')
    <div class="grid margin">
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="{{$helpful->img->link}}?{{$helpful->img->cache_index}}" alt="{{$helpful->img->alt}}" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title">{{$helpful->tech_name}}</h1>

                    <div class="social-buttons">
                        <div class="ya-share2" data-services="vkontakte,facebook" data-counter=""></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <article class="content" >

        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">
                    {!! $helpful->descr_1 !!}
                </div>
            </div>
            <div class="col-1-2">
                @if($helpful->right_side_1 != '' && $helpful->right_side_1 != '<p><br></p>')
                <div class="interest">
                    {!! $helpful->right_side_1 !!}
                </div>
                @endif
            </div>
        </div>
        @if( $helpful->hel_pokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            Показания
                        </p>
                        <ul class="list">
                            @foreach($helpful->hel_pokazania_group as $item)
                                <li class="item">{{$item->p_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $helpful->hel_protivopokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block protiv">
                        <p class="title">
                            Противапоказания
                        </p>
                        <ul class="list">
                            @foreach($helpful->hel_protivopokazania_group as $item)
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

        @include('front.common.offers-row')

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
            "@id": "/helpful",
            "name": "Новинки"
            }
          },
          {
          "@type": "ListItem",
          "position": 3,
          "item":
           {
             "@id": "/helpful/{{$helpful->slug}}",
             "name": "{{$helpful->tech_name}}"
           }
          }
         ]
        }
    </script>

@endsection