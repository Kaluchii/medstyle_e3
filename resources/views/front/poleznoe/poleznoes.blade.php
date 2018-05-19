@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $static->seo_description_field, 'meta_keywords' => $static->seo_keywords_field])
    <?php $title = $static->page_title_field ?>
    <article class="content" data-page="helpful">
        <div class="content-head">
            <h1 class="poleznoe-title">{{$static->title_field}}</h1>
        </div>
        <div class="margin-left-wrap">
        <div class="grid grid-pad helpful">

            @foreach($dom->poleznoe_group as $item)

                <div class="poleznoe-block-item">
                    <a class="item-helpful" href="/helpful/{{$item->slug_field}}">
                        <div class="image-wrap">
                            <img src="/images/{{$item->big_pict_image->secondary_link}}" alt="{{$item->big_pict_image->alt}}">
                            <div class="hover-special"></div>
                        </div>
                        <p><a href="/helpful/{{$item->slug_field}}" class="poleznoe-link">{{$item->name_field}}</a></p>
                        <div class="about-helpful">
                            {!! $item->descr_0_field !!}
                        </div>
                    </a>
                </div>
            @endforeach
            </div>
        </div>
    </article>
@endsection
