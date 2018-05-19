@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['meta_description' => $spec->seo_description_field, 'meta_keywords' => $spec->seo_keywords_field])
    <?php $title = $spec->page_title_field ?>
    <article class="content">
        <div class="content-head">
            <h1 class="content-head-title spec">Специалисты</h1>
        </div>
        <div class="grid grid-pad list">
            @foreach($all_spec as $item)
                @if($item->id_field == $spec->id_field)
                    <div class="col-1-4">
                        <div class="speci active"><a href="/specialist/{{$item->slug_field}}" class="spec-link">{{$item->name_field}}</a></div>
                    </div>
                @else
                    <div class="col-1-4">
                        <div class="speci"><a href="/specialist/{{$item->slug_field}}" class="spec-link">{{$item->name_field}}</a></div>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="grid grid-pad specialist">
            <div class="col-1-2">
                <div class="photo">
                    <img src="/images/{{$spec->spec_photo_image->primary_link}}" alt="{{$spec->spec_photo_image->alt}}" class="photo">
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
                    <a href="#certif" class="spec-cert"><img src="/images/certificate.png" alt="Медицинские сертификаты"></a>
                </div>
            </div>
            <div class="col-1-2">
                <div class="about-specialist text-block">
                    <h2 class="spec-name">{{$spec->name_field}}</h2>
                    <p class="spec-prof">{{$spec->profession_field}}</p>
                    {!! $spec->about_field !!}
                </div>
            </div>
        </div>
        <div class="overlay" id="cert">
            <div class="popup_table">
                <div class="popup_cell">
                    <div class="white-popup" id="certif" data-popup="grid">
                        <h3 class="popup_title">Сертификаты</h3>
                        <div class="grid gallery-slider">
                            <?php $i = -1;?>
                            @foreach($spec->spec_certs_group as $item)
                                <div class="col-1-3">
                                    <a class="cert photo" data-id="{{$i++}}" href="/images/{{$item->certificate_image->primary_link}}">
                                        <img src="/images/{{$item->certificate_image->icon_link}}" alt="{{$item->certificate_image->alt}}" class="cert">
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
