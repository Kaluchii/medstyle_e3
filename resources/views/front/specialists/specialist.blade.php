@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $specialist->seo_title, 'description' => $specialist->seo_description, 'keywords' => $specialist->seo_keywords])
    <article class="content">
        <div class="content-head">
            <h1 class="content-head-title spec">Специалисты</h1>
        </div>
        <div class="grid grid-pad list">
            @foreach($specialists->specialists_group as $item)
                @if($item->id == $specialist->id)
                    <div class="col-1-4">
                        <div class="speci active"><a href="/specialist/{{$item->slug}}" class="spec-link">{{$item->spec_name}}</a></div>
                    </div>
                @else
                    <div class="col-1-4">
                        <div class="speci"><a href="/specialist/{{$item->slug}}" class="spec-link">{{$item->spec_name}}</a></div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="grid grid-pad specialist">
            <div class="col-1-2">
                <div class="photo">
                    <img src="{{$specialist->img->link}}?{{$specialist->img->cache_index}}" alt="{{$specialist->img->alt}}" class="photo">
                </div>
                <div class="small-text">
                    <p>С радостью отвечу на вопросы о косметологии и правильном питании. Чтобы получить персональную консультацию, запишитесь на бесплатный прием.</p>
                </div>
                <div class="quest-and-consult">
                    <p class="link"><a href="#quest" class="link ask-me-popup">Задать вопрос</a></p>
                    <p class="link"><a href="#cons" class="link consult-popup">Записаться на консультацию</a></p>
                </div>
                <div class="sertificats">
                    <h3 class="sert">Сертификаты</h3>
                    <a href="#certif" class="spec-cert"><img src="/img/certificate.png" alt="Медицинские сертификаты"></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="about-specialist text-block">
                    <h2 class="spec-name">{{$specialist->spec_name}}</h2>
                    <p class="spec-prof">{{$specialist->profession}}</p>
                    {!! $specialist->about !!}
                </div>
            </div>
        </div>
        <div class="overlay" id="cert">
            <div class="popup_table">
                <div class="popup_cell">
                    <div class="white-popup" id="certif" data-popup="grid">
                        <h3 class="popup_title">Сертификаты</h3>
                        <div class="grid gallery-slider">
                            @php $i = -1;@endphp
                            @foreach($specialist->spec_sertificates_group as $item)
                                <div class="col-1-3">
                                    <a class="cert photo" data-id="{{$i++}}" href="{{$item->img->link}}?{{$item->img->cache_index}}">
                                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="cert">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
@include('front.popups.consult')

@endsection
