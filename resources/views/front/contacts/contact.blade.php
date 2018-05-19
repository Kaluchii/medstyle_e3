@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $contact->seo_description_field, 'meta_keywords' => $contact->seo_keywords_field])
    <?php $title = $contact->page_title_field ?>
<article class="content">
    <div class="content-head">
        <h1 class="content-head-title spec">Контакты</h1>
    </div>
    <div class="grid grid-pad contacts">
        <div class="col-1-2 text-block">
           {!! $contact->contacts_field !!}
        </div>
        <div class="col-1-2">
            <img src="/images/{{$contact->photo_image->primary_link}}" alt="{{$contact->photo_image->alt}}" class="building-photo">
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
                {!! $contact->maps_field !!}
            </div>
        </div>
    </div>
</article>
@include('front.popups.consult')
@endsection
