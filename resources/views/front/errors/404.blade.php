@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.meta', ['title' => 'Страница не найдена', 'description' => '', 'keywords' => ''])
    <article class="content">
        <div class="error-page">
            <h1 class="error-page__code">404</h1>
            <p class="error-page__text">Страница не найдена</p>
        </div>
    </article>
@endsection
