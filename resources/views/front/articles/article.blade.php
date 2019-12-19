@extends('front.layout')
@include('front.menu')
@section('content')
{{--@include('front.meta', ['title' => $article->seo_title, 'description' => $article->seo_description, 'keywords' => $article->seo_keywords])--}}
<div class="article__wrap">
    <div class="article__main-block">
        <h2 class="article__title title--l1">{{$article->articles_name}}</h2>
        <a href="{{$article->services_link}}" class="article__btn btn btn--big grad-btn grad-btn--article">Перейти к услуге</a>
        <a href="{{$article->services_link}}" class="article__btn btn btn--big grad-btn grad-btn--article">Читать публикацию</a>
    </div>
    <div class="grid margin">
        <div class="col-1-1 head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="{{$article->img->link}}?{{$article->img->cache_index}}" alt="{{$article->img->alt}}" class="head-img">
                </div>
                <div class="information-block">
{{--                    <h1 class="product-title">{{$article->articles_name}}</h1>--}}
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
                <span class="head-reiting">Пожалуйста, оцените наш материал:</span>
                <div class="raiting-star" data-entity="{{$article->name}}" data-id="{{$article->id}}">
                    <ul class="star-rating-default" style="width:125px">
                        <li class="current-rating" style="width:{{$rating['percent']}}%;">{{$rating['middle']}}</li>
                        <li class="star">
                            <a class="star-link" data-raiting="1" title="1/5" style="width:20%;z-index:6"
                               rel="nofollow">1</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="2" title="2/5" style="width:40%;z-index:5"
                               rel="nofollow">2</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="3" title="3/5" style="width:60%;z-index:4"
                               rel="nofollow">3</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="4" title="4/5" style="width:80%;z-index:3"
                               rel="nofollow">4</a>
                        </li>
                        <li class="star">
                            <a class="star-link" data-raiting="5" title="5/5" style="width:100%;z-index:2"
                               rel="nofollow">5</a>
                        </li>
                    </ul>
                    <span class="totalvotes" itemprop="aggregateRating" itemReviewed="Thing" itemscope="itemscope" itemtype="http://schema.org/AggregateRating">
                    <meta itemprop="ratingValue" content="{{$rating['middle']}}">Текущий рейтинг — {{$rating['middle']}}
                    <meta itemprop="bestRating" content="5">
                    <meta itemprop="ratingCount" content="{{$rating['count']}}"> ({{$rating['count']}} человек)
                    </span>
                </div>
            </div>
        </div>
    </article>
</div>
<script>
    document.querySelector('body').classList.add('stop-scroll');
</script>

@include('front.common.offers-row')

@endsection
