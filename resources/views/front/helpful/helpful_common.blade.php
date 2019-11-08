@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $helpful->seo_title, 'description' => $helpful->seo_description, 'keywords' => $helpful->seo_keywords])
    <article class="content" data-page="helpful">
        <div class="content-head">
            <h1 class="poleznoe-title">{{$helpful->title}}</h1>
        </div>
        <div class="margin-left-wrap">
        <div class="grid grid-pad helpful">

            @foreach($helpful->helpful_group as $item)

                <div class="poleznoe-block-item">
                    <a class="item-helpful" href="{{$item->slug}}">
                        <div class="image-wrap">
                            <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}">
                            <div class="hover-special"></div>
                        </div>
                        <p><a href="{{$item->slug}}" class="poleznoe-link">{{$item->tech_name}}</a></p>
                        <div class="about-helpful">
                            {!! $item->preview_descr !!}
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </article>
@endsection
