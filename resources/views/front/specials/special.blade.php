@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $special->seo_description_field, 'meta_keywords' => $special->seo_keywords_field])
    <?php $title = $special->page_title_field ?>
    <article class="content">
        <div class="grid">
            <div class="col-1-1 head">
                <div class="head-section problem">
                    <div class="information-block">
                        <h1 class="product-title">{{$special->name_field}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">
                    {!! $special->all_text_field !!}
                </div>
            </div>
            <div class="col-1-2">
            </div>
        </div>

    </article>

@endsection