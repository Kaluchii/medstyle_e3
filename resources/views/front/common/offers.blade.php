<section class="offers">
    <div class="offers__wrap fade js_animation" data-offset="40">
        <h2 class="offers__title title--l1 fade fadeInUp__child">Акции и скидки</h2>
        <h2 class="offers__title offers__title--mob title--l1 fade fadeInUp__child">Акции и скидки</h2>
        <ul class="offers__list">
            @php $i = 1 @endphp
            @foreach($stocks->stocks_group as $item)
            <li class="offers__item fade fadeInUp__child fade__delay-{{ $i++ }}">
                <a href="{{$item->link}}" class="offers__item-link"></a>
                <div class="offers__item-img-wrap">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->stock_name}}" class="offers__img">
                </div>
                <div class="offers__info-wrap">
                    <h3 class="offers__item-title">{{ $item->stock_name }}</h3>
                    <p class="offers__item-text">{!! $item->text !!}</p>
                    <div class="offers__item-discount">{{ $item->numeral }}</div>
                    <p class="offers__item-term">{{ $item->discount }}</p>
                </div>
            </li>
            @endforeach
        </ul>

        <div class="offers__list-mob js_slick_active">
            @foreach($stocks->stocks_group as $item)
            <div class="offers__item-mob">
                <a href="{{$item->link}}" class="offers__item-link"></a>
                <div class="offers__item-img-wrap fade fadeInUp__child fade__delay-1">
                    <img src="{{$item->img->link}}?{{$item->img->cache_index}}" alt="{{$item->stock_name}}" class="offers__img">
                </div>
                <div class="offers__info-wrap">
                    <h3 class="offers__item-title">{{ $item->stock_name }}</h3>
                    <p class="offers__item-text">{!! $item->text !!}</p>
                    <div class="offers__item-discount">{{ $item->numeral }}</div>
                    <p class="offers__item-term">{{ $item->discount }}</p>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>