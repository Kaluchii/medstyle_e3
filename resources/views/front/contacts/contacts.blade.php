@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $contacts->seo_title, 'description' => $contacts->seo_description, 'keywords' => $contacts->seo_keywords])
<article class="content">
    <div class="content-head">
        <h1 class="content-head-title spec">{{$contacts->title}}</h1>
    </div>
    <div class="grid grid-pad contacts">
        <div class="col-1-2 text-block">
           {!! $contacts->contacts_field !!}
        </div>
        <div class="col-1-2">
            <div class="from-life-block">
                <a href="/tour/index.html" target="_blank" class="from-life">
                    <div class="from-life-photo">
                        <img src="{{$contacts->img->link}}?{{$contacts->img->cache_index}}" alt="{{$contacts->img->alt}}" class="from-life building-photo">
                        <p class="text-from"><span>3D-тур</span></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="grid grid-pad attention">
        <div class="col-1-1">
            <div class="attention-block">
                <p class="text">Обратите внимание, посещение клиники возможно лишь по предварительной записи. </br>
                    <a href="#cons" class="link consult-popup">Записаться на консультацию</a>
                </p>
            </div>
        </div>
    </div>
    <div class="grid grid-pad maps">
        <p class="block-title">Карта проезда</p>

        <div class="col-1-1">
            <div class="map">
                {!! $contacts->maps_field !!}
            </div>
        </div>
    </div>
</article>
@include('front.popups.consult')
@endsection
