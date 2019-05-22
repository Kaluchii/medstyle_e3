@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.meta', ['title' => $slider->seo_title, 'description' => $slider->seo_description, 'keywords' => $slider->seo_keywords])
    <h1 class="index-title">Дайте нам месяц и мы&nbsp;вернем вам&nbsp;10&nbsp;лет</h1>
    <div class="head-slider">
        <div class="head-slider__list js-slick">
            @php $i= 0;
            function str_replace_once($search, $replace, $text)
            {
                $pos = strpos($text, $search);
                return $pos!==false ? substr_replace($text, $replace, $pos, strlen($search)) : $text;
            }
            function wrap_in_link( $str, $slug)
            {
                $astart = '<a href=\'' . $slug . '\' class=\'tile-item__link pink-link\'>';
                $aend = '</a>';
                $str = str_replace_once('#', $astart, $str);
                $str = str_replace_once('#', $aend, $str);
                return $str;
            }
            @endphp

            @foreach($slider->slides_group as $item)
                @php $i++ @endphp
                <div class="head-slider__item tile-item" style="@if($i % 3 == 2)max-width: 390px; @else max-width: 390px; @endif">
                    <a href="{{$item->link}}" class="tile-item__img-wrap">
                        <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->img->alt}}" class="tile-item__img">
                    </a>
                    @php $link = wrap_in_link($item->slide_title, $item->link); @endphp
                    <h3 class="tile-item__title">{!! $link !!}</h3>
                    <div class="tile-item__text">{!! $item->descr_field !!}</div>
                </div>
            @endforeach
        </div>
    </div>
    <article class="content test-1 test-2" data-page="index">
        <div class="service-proc">
            <h2 class="service-proc__title">Услуги и процедуры</h2>
            <div class="service-proc__services-category services-category">
                @foreach($services->serv_category_group as $item_cat)
                    <div class="services-category__services-category-item services-category-item">
                        <div class="services-category-item__wrap"><a href="/services#{{$item_cat->cat_name}}" class="services-category-item__link-title pink-link">{{$item_cat->cat_name}}</a>
                            <p class="services-category-item__text">{!! $item_cat->descr_on_main !!}</p></div>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="block-shadow"><img src="/img/block_shadow.png" alt="Тень"></div>
        <div class="testing-wrap">
            <div class="grid grid-pad testing-index-block">
                <div class="col-1-1">
                    <p class="about-testing">Чтобы помочь вам с выбором процедуры, мы разработали несложный тест</p>
                    <p class="button-wrapper">
                        <a href="/age" class="go-to-test">Пройти тест</a>
                    </p>
                </div>
            </div>
        </div>
        <div class="video-wrap">
            <div class="new-video">
                <h2 class="new-video__title">Новые видео</h2>
                <div class="new-video__list">
                    @foreach($videos->videos_group as $item)
                        <div class="new-video__item video-item">
                            <div class="video-item__video-wrap">
                                <div class="video-item__video video_player"
                                     data-link="{{$item->video_link}}"
                                     data-preview="{{$item->img->link}}?{{$item->img->cache_index}}">
                                </div>
                            </div>
                            <div class="video-item__name-wrap">
                                <a href="{{$item->service_link}}" target="_blank" class="video-item__video-name pink-link">{{$item->video_name}}</a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="new-video__list new-video__list--mobile js-slick-video">
                    @foreach($videos->videos_group as $item)
                        <div class="new-video__item video-item">
                            <div class="video-item__video-wrap video-item__video-wrap--main">
                                <div class="video-item__video video_player"
                                     data-link="{{$item->video_link}}"
                                     data-preview="{{$item->img->link}}?{{$item->img->cache_index}}">
                                </div>
                            </div>
                            <div class="video-item__name-wrap">
                                <a href="{{$item->service_link}}" target="_blank" class="video-item__video-name pink-link">{{$item->video_name}}</a>
                            </div>
                        </div>
                    @endforeach
                        <div class="new-video__item all-videos">
                            <a href="/video" class="all-videos__link">
                                <span class="all-videos__link-text pink-link">Все видео</span>
                            </a>
                        </div>
                </div>
                <div class="new-video__btn-wrap">
                    <a href="/video" class="new-video__btn">Смотреть все видео</a>
                </div>
                <a target="_blank" href="https://www.youtube.com/channel/UCE2HHrjCN11fRl1J6Fyj-Gw?sub_confirmation=1" class="new-video__subscribe new-video__subscribe--mobile">
                    <p class="new-video__text new-video__text--mobile">Подпишитесь на наш YouTube-канал, чтобы узнавать о роликах сразу, как&nbsp;они&nbsp;вышли.</p>
                    <img src="/img/youtube_play.png" alt="YouTube-канал Medstyle" class="new-video__play-img">
                    <p class="new-video__link-wrap">
                        <span class="new-video__link pink-link">Подписаться на YouTube</span>
                    </p>
                </a>
                <p class="new-video__subscribe">Подпишитесь на наш <a target="_blank" href="{{$all_site->youtube}}?sub_confirmation=1" class="pink-link">YouTube-канал</a>, чтобы узнавать о роликах сразу, как они вышли.</p>
            </div>
        </div>
        <div class="block-shadow"><img src="/img/block_shadow.png" alt="Тень"></div>
    </article>
@endsection

