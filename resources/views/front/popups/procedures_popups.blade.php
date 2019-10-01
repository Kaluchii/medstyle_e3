@foreach($services->serv_category_group as $item)
<div class="procedures-popup mfp-with-anim mfp-hide" id="procedures_popup-{{ $item->id }}">
    <h3 class="procedures-popup__title">{{$item->cat_name}}</h3>
    <ul class="procedures-popup__list">
        @foreach($item->services_group as $item)
        <li class="procedures-popup__item">
            <a href="/service/{{$item->slug}}" class="procedures-popup__link link--main">
                {{$item->serv_name}}<span class="">{{$item->discount_common}}</span>
            </a>
        </li>
        @endforeach
    </ul>
</div>
@endforeach