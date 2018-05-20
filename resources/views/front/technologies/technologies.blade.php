@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $technologies->seo_title, 'description' => $technologies->seo_description, 'keywords' => $technologies->seo_keywords])
    <section class="content-wrap" data-page="technologies">
        <div class="technologies">
            <h1 class="technologies__block-title">{{$technologies->title}}</h1>
            <div class="technologies__subtitle-text">{!! $technologies->text !!}</div>
            <div class="technologies__list trowelling-block">
                @php
                $i = 0;
                $count = $technologies->technologies_group->count()+1;
                $second_col = ceil($count / 3);
                $third_col = $count - floor(($count - $second_col) / 2);
                @endphp
                @foreach($technologies->technologies_group as $item)
                    @php $i++ @endphp
                    @if( $i == 1 or $i == $second_col+1 or $i == $third_col+1 ) <ul class="trowelling-block__list trowelling-block__list--technologies vertical-list"> @endif
                    <li class="vertical-list__item technologies-item @if( $i < $second_col ) movable @endif">
                        <a href="/technology/{{$item->slug}}" class="technologies-item__link">
                            <div class="technologies-item__img-wrap">
                                <img src="{{$item->preview->link}}?{{$item->preview->cache_index}}" alt="{{$item->preview->alt}}" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title"><span class="technologies-item__link-text">{{$item->tech_name}}</span></h3>
                        </a>
                        <div class="technologies-item__text">{!! $item->preview_descr !!}</div>
                    </li>
                    @if( $i == ($count - 1) )
                        <li class="vertical-list__item technologies-item technologies-item--center-align social-block">
                            <div class="technologies-item__img-wrap">
                                <img src="/img/stock-social.png" alt="" class="technologies-item__img">
                            </div>
                            <h3 class="technologies-item__title">Следите за обновлениями</h3>
                            <p class="technologies-item__text">Мы регулярно обновляем наши аппаратные технологии и
                                добавляем услуги. Следите за обновлениями в
                                <a target="_blank" href="{{$all_site->fb}}" class="technologies-item__link pink-link">Facebook</a> и WhatsApp по номеру
                                <span class="no-br">{{$all_site->whatsapp}}</span>.</p>
                        </li>
                    @endif
                    @if( $i == $second_col or $i == $third_col or $i == ($count - 1) ) </ul> @endif
                @endforeach
            </div>
        </div>
    </section>
@endsection
