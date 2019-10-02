<section class="offers">
    <div class="offers__wrap">
        <h2 class="offers__title title--l1">{{ $offers->title }}</h2>
        <h2 class="offers__title offers__title--mob title--l1">Акции и скидки</h2>
        <ul class="offers__list">
            @foreach($offers->offers_list_group as $item)
            <li class="offers__item">
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
                <div class="offers__item-img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->offers_title}}" class="offers__img">
                </div>
                <div class="offers__info-wrap">
                    <h3 class="offers__item-title">{{$item->offers_title}}</h3>
                    <p class="offers__item-text">{{$item->text}}</p>
                    <div class="offers__item-discount">{{$item->offers_discount}}</div>
                    <p class="offers__item-term">{{$item->offers_date}}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>