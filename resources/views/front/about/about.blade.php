@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $about->seo_title, 'description' => $about->seo_description, 'keywords' => $about->seo_keywords])
    <div class="grid">
        <div class="col-1-1 head about-head">
            <div class="head-section">
                <div class="head-img-wrap">
                    <img src="/img/clinics.jpg" alt="Деятельность клиники эстетической медицины Medstyle" class="head-img">
                </div>
                <div class="information-block">
                    <h1 class="product-title">{{$about->title}}</h1>
                </div>
            </div>
        </div>
    </div>
    <article class="content" data-page="about">
        <div class="grid grid-pad about">
            <div class="col-1-2">
                <div class="text-block">
                    {!! $about->text !!}
                </div>
            </div>
            <div class="col-1-2">
                <div class="from-life-block">
                    <a href="/tour/index.html" target="_blank" class="from-life">
                        <div class="from-life-photo"><img src="/img/clinic_tower.jpg" alt="Вход в клинику Медстайл" class="from-life about-block" ></div>
                        <p class="text-from"><span>3D-тур</span></p>
                    </a>
                </div>
            </div>
        </div>
    </article>
@endsection
