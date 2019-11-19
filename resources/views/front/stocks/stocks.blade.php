@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $stocks->seo_title, 'description' => $stocks->seo_description, 'keywords' => $stocks->seo_keywords])

    @include('front.common.offers')

@endsection
