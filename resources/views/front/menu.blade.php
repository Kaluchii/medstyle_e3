@section('menu')
    <div class="main-menu__wrap">
        <nav class="main-menu">
            <ul class="main-menu__list">
                <li class="main-menu__item js_menu_item">
                    <a href="/about" class="main-menu__item-link js_menu_item_link">О клинике</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/specialists" class="main-menu__item-link js_menu_item_link">Специалисты</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/services" class="main-menu__item-link js_menu_item_link">Услуги</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/technology" class="main-menu__item-link js_menu_item_link">Технологии</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/helpful" class="main-menu__item-link js_menu_item_link">Новинки</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/questions" class="main-menu__item-link js_menu_item_link">Вопросы и ответы</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/news" class="main-menu__item-link js_menu_item_link">Акции</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/video" class="main-menu__item-link js_menu_item_link">Видео</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/contacts" class="main-menu__item-link js_menu_item_link">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="main-menu__mob js_menu_mob">
            <div class="main-menu__mob-button-wrap js_menu_mob_open">
                <div class="main-menu__mob-button"></div>
            </div>
            <a href="tel:{{str_replace([' ', '(', ')', '-'], '', $all_site->phone)}}" class="main-menu__mob--phone"></a>
        </div>
    </div>
@endsection
