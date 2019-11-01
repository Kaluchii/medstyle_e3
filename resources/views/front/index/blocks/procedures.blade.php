<section class="procedures js_procedures">
    <div class="procedures__wrap fade js_animation" data-offset="30">
        <h2 class="procedures__title title--l1 fade fadeInUp__child fade__delay-1">Выберите процедуру</h2>
        <ul class="procedures__list">
            @php $i = 1; $j = 1; @endphp
            @foreach($services->serv_category_group as $item)
                <li class="procedures__item procedures__item--{{ $i++ }}">
                    <div class="procedures__item-wrap js_parent_el">
                        <h3 class="procedures__item-title title--l2 fade fadeInUp__child fade__delay-3">{{$item->cat_name}}</h3>
                        <p class="procedures__item-text text-l1 fade fadeInUp__child fade__delay-5">{!! $item->descr_on_main !!}</p>
                        <div class="procedures__item-btn-wrap fade fadeInUp__child fade__delay-7">
                            <button class="procedures__item-btn btn js_procedures_popup_open">Смотреть процедуры</button>
                        </div>
                    </div>
                    <div class="procedures__item-popup-wrap js_procedure_popup">
                        <div class="procedures__item-popup">
                            <h4 class="procedures__popup-title title--l2">{{$item->cat_name}}</h4>
                            <ul class="procedures__popup-list">
                                @foreach($item->services_group as $item)
                                    <li class="procedures__popup-item">
                                        <a href="/service/{{$item->slug}}"
                                           class="procedures__popup-link link--main">{{$item->serv_name}}
                                            <span class="procedures__popup-link--discount"> {{$item->discount_common}}</span>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>

        <ul class="procedures__mob-list">
            @php $i = 2 @endphp
            @foreach($services->serv_category_group as $item)
                <li class="procedures__mob-item fade fadeInUp__child fade__delay-{{ $i++ }}">
                    <a href="#procedures_popup-{{ $item->id }}"
                       class="procedures__mob-item-btn js_popup_open">{{$item->cat_name}}</a>
                </li>
            @endforeach
        </ul>
    </div>
</section>