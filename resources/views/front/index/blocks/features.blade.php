<section class="features">
    <div class="features__wrap fade js_animation" data-offset="40">
        <div class="features__title-wrap fade fadeInUp__child">
            <h2 class="features__title title__band title--l1">{{$features->title}}</h2>
        </div>
        <ul class="features__list">
            @php $j = 1; $i = 1; @endphp
            @foreach($features->features_list_group as $item)
            <li class="features__item fade fadeInUp__child fade__delay-{{ $i++ }}">
                <div class="features__item-img-wrap">
                    <video class="features__item-video js_video js_video_load" data-src="{{$item->video->link}}{{$item->video->link ? 'mp4' : ''}}" src="" poster="{{$item->img->link}}?{{$item->img->cache_index}}" loop muted></video>
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->features_title}}" class="features__item-img">
                </div>
                <p class="features__item-title title--l2">{{$item->features_title}}</p>
                <p class="features__item-text text-l1">{{$item->text}}</p>
            </li>
            @endforeach
        </ul>

        <div class="features__mob-features mob-features">
            <div class="mob-features__wrap">
                <div class="mob-features__slider js_slick_active">
                    @foreach($features->features_list_group as $item)
                    <div class="mob-features__slide">
                        <div class="mob-features__slide-media-wrap">
                            <img class="mob-features__slide-img fade fadeInUp__child fade__delay-1" src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->features_title}}">
                            <video class="mob-features__video js_mob_video_load fade fadeInUp__child fade__delay-1" data-src="{{$item->video->link}}{{$item->video->link ? 'mp4' : ''}}" src="" playsinline autoplay style="width: 100%" loop muted ></video>
                        </div>
                        <h3 class="mob-features__title fade fadeInUp__child fade__delay-2">{{$item->features_title}}</h3>
                        <p class="mob-features__text fade fadeInUp__child fade__delay-3">{{$item->text}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>