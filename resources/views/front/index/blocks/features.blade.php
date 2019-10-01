<section class="features">
    <div class="features__wrap">
        <div class="features__title-wrap">
            <h2 class="features__title title__band title--l1">{{$features->title}}</h2>
        </div>
        <ul class="features__list">
            @foreach($features->features_list_group as $item)
            <li class="features__item">
                <div class="features__item-img-wrap">
                    <video class="features__item-video js_video" poster="{{$item->img->link}}?{{$item->img->cache_index}}" loop muted src="{{$item->video->link}}"></video>
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
                        <video playsinline type="video/mp4" autoplay width="100%" class="mob-features__video" loop muted src="{{$item->video->link}}"></video>
                        <h3 class="mob-features__title">{{$item->features_title}}</h3>
                        <p class="mob-features__text">{{$item->text}}</p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>