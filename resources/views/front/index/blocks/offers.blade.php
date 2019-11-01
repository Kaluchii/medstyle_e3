<section class="offers">
    <div class="offers__wrap fade js_animation" data-offset="40">
        <h2 class="offers__title title--l1 fade fadeInUp__child">{{ $offers->title }}</h2>
        <h2 class="offers__title offers__title--mob title--l1 fade fadeInUp__child">Акции и скидки</h2>
        <ul class="offers__list">
            @php $i = 1 @endphp
            @foreach($offers->offers_list_group as $item)
            <li class="offers__item fade fadeInUp__child fade__delay-{{ $i++ }}">
                <div class="offers__item-img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->offers_title}}" class="offers__img">
                </div>
                <div class="offers__info-wrap">
                    <h3 class="offers__item-title">{{$item->offers_title}}</h3>
                    <p class="offers__item-text">{{$item->text}}</p>
                    <div class="offers__item-discount">{{$item->offers_discount}}</div>
                    <p class="offers__item-term">{{$item->offers_date}}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <div class="offers__list-mob js_slick_active">
            @foreach($offers->offers_list_group as $item)
            <div class="offers__item-mob">
                <div class="offers__item-img-wrap fade fadeInUp__child fade__delay-1">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->offers_title}}" class="offers__img">
                </div>
                <div class="offers__info-wrap">
                    <h3 class="offers__item-title fade fadeInUp__child fade__delay-2">{{$item->offers_title}}</h3>
                    <p class="offers__item-text fade fadeInUp__child fade__delay-3">{{$item->text}}</p>
                    <div class="offers__item-discount fade fadeInUp__child fade__delay-4">{{$item->offers_discount}}</div>
                    <p class="offers__item-term fade fadeInUp__child fade__delay-5">{{$item->offers_date}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>