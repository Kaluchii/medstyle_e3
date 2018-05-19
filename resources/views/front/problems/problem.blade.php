@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $problems->seo_description_field, 'meta_keywords' => $problems->seo_keywords_field])
    <?php $title = $problems->page_title_field ?>
    <article class="content">
        <div class="grid margin">
            <div class="col-1-1 head">
                <div class="head-section problem">
                    <div class="information-block">
                        <h1 class="product-title">{{$problems->name_field}}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="grid content">
            <div class="col-1-2">
                <div class="first-paragraph">
                    {!! $problems->text_field !!}
                </div>
            </div>
            <div class="col-1-2">
            </div>
        </div>
        @include('front.specials')
        @yield('special')

    </article>

@endsection