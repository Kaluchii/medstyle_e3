@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $article->seo_title, 'description' => $article->seo_description, 'keywords' => $article->seo_keywords])
<div class="article__wrap js_article_wrap">
    <div class="grid margin article__top-wrap">
        <div class="article__main-block">
            <h2 class="article__title title--l1 js_article_title">{{$article->articles_name}}</h2>
            <a href="{{$article->services_link}}" class="article__btn btn btn--big grad-btn grad-btn--article">Перейти к услуге</a>
        </div>
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap head-img-wrap--mobile">
                    @if($articles->img->link != '')
                        <img src="{{$article->bg_img->link}}?{{$article->bg_img->cache_index}}" alt="{{$article->bg_img->alt}}" class="head-img over">
                    @endif
                    <img src="{{$article->img->link}}?{{$article->img->cache_index}}" alt="{{$article->img->alt}}" class="head-img">
                </div>
            </div>
        </div>
    </div>

    <article class="content" data-page="articles" itemscope itemtype="http://schema.org/Service">
        <div class="grid content text-block">
            <div class="col-1-2">
                <div class="first-paragraph">@if($article->descr_1 !== '<p><br></p>'){!! $article->descr_1 !!}@endif</div>
            </div>
            <div class="col-1-2">
                @if($article->right_side_1 != '' && $article->right_side_1 != '<p><br></p>')
                    <div class="interest">
                        {!! $article->right_side_1 !!}
                    </div>
                @endif
            </div>
        </div>
        @if( $article->articles_pokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block after-proc">
                        <p class="title">
                            Показания
                        </p>
                        <ul class="list">
                            @foreach($article->articles_pokazania_group as $item)
                                <li class="item">{{$item->p_name}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-1-2">
                </div>
            </div>
        @endif
        @if( $article->articles_protivopokazania_group->count() > 0 )
            <div class="grid content con-4">
                <div class="col-1-2">
                    <div class="black-block protiv">
                        <p class="title">
                            Противопоказания
                        </p>
                        <ul class="list">
                            @foreach($article->articles_protivopokazania_group as $item)
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
</div>
{{--<script>--}}
{{--    document.querySelector('body').classList.add('stop-scroll');--}}

{{--    document.querySelector('.js_scroll_on').addEventListener('click', function () {--}}
{{--        document.querySelector('body').classList.remove('stop-scroll');--}}
{{--        document.querySelector('.js_article_wrap').classList.add('scroll-on');--}}
{{--        document.querySelector('.js_article_title').classList.add('scroll-on');--}}
{{--        this.classList.add('scroll-on'); --}}
{{--    });--}}
{{--</script>--}}
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
        "@id": "/articles",
        "name": "Статьи"
        }
      },
      {
      "@type": "ListItem",
      "position": 3,
      "item":
       {
         "@id": "/articles/{{$article->articles_name}}",
         "name": "{{$article->slug}}"
       }
      }
     ]
    }
</script>

@include('front.common.offers-row')

@endsection
