<section class="procedures">
    <h2 class="procedures__title title--l1">Выберите процедуру</h2>
    <ul class="procedures__list">
        @php $i = 1 @endphp
        @foreach($services->serv_category_group as $item)
        <li class="procedures__item procedures__item--{{ $i++ }}">
            <h3 class="procedures__item-title title--l2">{{$item->cat_name}}</h3>
            <p class="procedures__item-text text-l1">
                {!! $item->descr_on_main !!}
            </p>
            <div class="procedures__item-btn-wrap js_parent_el">
                <button class="procedures__item-btn btn js_procedures_popup_open">Смотреть процедуры</button>
            </div>
            <div class="procedures__item-popup js_procedure_popup">
                <h4 class="procedures__popup-title title--l2">{{$item->cat_name}}</h4>
                <ul class="procedures__popup-list">
                    @foreach($item->services_group as $item)
                    <li class="procedures__popup-item">
                        <a href="/service/{{$item->slug}}" class="procedures__popup-link link--main">{{$item->serv_name}}<span class="procedures__popup-link--discount"> {{$item->discount_common}}</span></a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </li>
        @endforeach
    </ul>


    <ul class="procedures__mob-list">
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Инъекционные методики</a>
        </li>
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Контурная пластика</a>
        </li>
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Нитевые подтяжки</a>
        </li>
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Аппаратные методики</a>
        </li>
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Дерматология</a>
        </li>
        <li class="procedures__mob-item">
            <a href="#" class="procedures__mob-item-btn">Пиллинги и уход за кожей</a>
        </li>
    </ul>
</section>