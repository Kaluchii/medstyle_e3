@section('menu')
    <div class="main-menu__wrap">
        <nav class="main-menu">
            <ul class="main-menu__list fade js_animation" data-offset="0">
                <li class="main-menu__item js_menu_item">
                    <a href="/about" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-1">О клинике</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/specialists" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-2">Специалисты</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/services" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-3">Услуги</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/technology" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-4">Технологии</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/helpful" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-5">Новинки</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/questions" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-6">Вопросы и ответы</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/news" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-7">Акции</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/video" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-8">Видео</a>
                </li>
                <li class="main-menu__item js_menu_item">
                    <a href="/contacts" class="main-menu__item-link js_menu_item_link fade fadeInUp__child fade__delay-9">Контакты</a>
                </li>
            </ul>
        </nav>
        <div class="main-menu__mob js_menu_mob">
            <div class="main-menu__mob-button-wrap js_menu_mob_open">
                <div class="main-menu__mob-button"></div>
            </div>
            <div class="main-menu__mob-links-wrap">
                <a href="https://api.whatsapp.com/send?phone={{ str_replace(array(' ', '(' , ')', '-', '+'), '', $all_site->whatsapp) }}" class="main-menu__mob-link main-menu__mob-link--wp" rel="nofollow" target="_blank"></a>
                <a href="tel:{{str_replace([' ', '(', ')', '-'], '', $all_site->whatsapp)}}" class="main-menu__mob-link main-menu__mob-link--phone binct-phone-number-3" rel="nofollow"></a>
            </div>
        </div>
    </div>
@endsection
