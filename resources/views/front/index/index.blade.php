@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])

    @include('front.index.blocks.title-block')
    @include('front.index.blocks.procedures')
    @include('front.index.blocks.choose')
    @include('front.index.blocks.features')
    @include('front.common.offers')
    @include('front.index.blocks.new-video')
    @include('front.common.seo-text')

    @include('front.popups.procedures_popups')

@endsection

