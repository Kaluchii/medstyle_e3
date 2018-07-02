@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $specialists->seo_title, 'description' => $specialists->seo_description, 'keywords' => $specialists->seo_keywords])
    <article class="content" data-page="specialists" >
        <div class="content-head">
            <h1 class="content-head-title specialists-title">{{$specialists->title}}</h1>
            <div class="grid grid-pad head-grid">
                <div class="col-1-2">
                    <p class="specialists__text-block">
                        {!! $specialists->text !!}
                    </p>
                </div>
                <div class="col-1-2"></div>
            </div>
        </div>
        <div class="grid grid-pad specialists">
            @foreach($specialists->specialists_group as $spec)
                @include('front.specialists.specialist_item')
            @endforeach
        </div>
    </article>
@endsection
