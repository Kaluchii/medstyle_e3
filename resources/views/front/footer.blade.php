<footer class="footer">
    <div class="footer__wrap">
        <div class="footer__top-block">
            <address class="footer__address-wrap">
                <p class="footer__address-title title--l5">Наш адрес</p>
                <p class="footer__address-text text-l1">{!! $all_site->address !!}</p>
                <div class="footer__address-link-wrap">
                    <a href="{{ $all_site->map_link }}" class="footer__address-link link--main" target="_blank">Карта проезда</a>
                </div>
            </address>
            <div class="footer__tel-wrap footer__tel-wrap--b">
                <h3 class="footer__tel-title title--l5">Запись на процедуры</h3>
                <div class="footer__tel-link-wrap">
                    <a href="tel:{{str_replace([' ', '(', ')', '-'], '', $all_site->phone)}}" class="footer__tel-link">{{ $all_site->phone }}</a>
                </div>
                <div class="footer__tel-link-wrap">
                    <a href="https://api.whatsapp.com/send?phone={{ str_replace(array(' ', '(' , ')', '-', '+'), '', $all_site->whatsapp) }}" class="footer__tel-link  footer__tel-link--wp" target="_blank" rel="nofollow">{{ $all_site->whatsapp }}</a>
                </div>
            </div>
            <div class="footer__social footer__social--b">
                <h3 class="footer__social-title title--l5">Мы в соцсетях</h3>
                <ul class="footer__social-list">
                    <li class="footer__social-item">
                        <a href="{{ $all_site->inst }}" class="footer__social-link footer__social-link--inst" target="_blank"></a>
                    </li>
                    <li class="footer__social-item">
                        <a href="{{ $all_site->youtube }}" class="footer__social-link footer__social-link--ytube" target="_blank"></a>
                    </li>
                    <li class="footer__social-item">
                        <a href="{{ $all_site->fb }}" class="footer__social-link footer__social-link--fb" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <div class="footer__store-wrap">
                <div class="footer__store-img-wrap">
                    <a href="{{ $all_site->app_store }}" target="_blank">
                        <img src="/img/store-1.svg" alt="app store" class="footer__store-img">
                    </a>
                </div>
                <div class="footer__store-img-wrap">
                    <a href="{{ $all_site->google_play }}" target="_blank">
                        <img src="/img/store-2.svg" alt="google play" class="footer__store-img">
                    </a>
                </div>
            </div>
        </div>
        <div class="footer__bottom-block">
            <div class="footer__tel-wrap footer__tel-wrap--bottom">
                <h3 class="footer__tel-title title--l5">Запись на процедуры</h3>
                <div class="footer__tel-link-wrap">
                    <a href="#" class="footer__tel-link">{{ $all_site->phone }}</a>
                </div>
                <div class="footer__tel-link-wrap">
                    <a href="#" class="footer__tel-link footer__tel-link--wp" target="_blank">{{ $all_site->whatsapp }}</a>
                </div>
            </div>
            <p class="footer__copyright">{!! $all_site->copyright !!}</p>
            <ul class="footer__nav-list footer__nav-list--n">
                <li class="footer__nav-item">
                    <a href="/about" class="footer__nav-link link--main">О клинике</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/specialists" class="footer__nav-link link--main">Специалисты</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/services" class="footer__nav-link link--main">Услуги</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/articles" class="footer__nav-link link--main">Публикации</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/age" class="footer__nav-link link--main">Ваш тест</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/news" class="footer__nav-link link--main">Акции</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/video" class="footer__nav-link link--main">Видео</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/technology" class="footer__nav-link link--main">Технологии</a>
                </li>
                <li class="footer__nav-item">
                    <a href="/helpful" class="footer__nav-link link--main">Новинки</a>
                </li>
            </ul>
            <div class="footer__social footer__social--n">
                <h3 class="footer__social-title title--l5">Мы в соцсетях</h3>
                <ul class="footer__social-list">
                    <li class="footer__social-item">
                        <a href="{{ $all_site->inst }}" class="footer__social-link footer__social-link--inst" target="_blank"></a>
                    </li>
                    <li class="footer__social-item">
                        <a href="{{ $all_site->youtube }}" class="footer__social-link footer__social-link--ytube" target="_blank"></a>
                    </li>
                    <li class="footer__social-item">
                        <a href="{{ $all_site->fb }}" class="footer__social-link footer__social-link--fb" target="_blank"></a>
                    </li>
                </ul>
            </div>
            <ul class="footer__nav-list-b">
                <li class="footer__nav-item-b">
                    <a href="/about" class="footer__nav-link-b link--main">О клинике</a>
                    <a href="/specialists" class="footer__nav-link-b link--main">Специалисты</a>
                </li>
                <li class="footer__nav-item-b">
                    <a href="/services" class="footer__nav-link-b link--main">Услуги</a>
                    <a href="/articles" class="footer__nav-link-b link--main">Публикации</a>
                </li>
                <li class="footer__nav-item-b">
                    <a href="/news" class="footer__nav-link-b link--main">Акции</a>
                    <a href="/video" class="footer__nav-link-b link--main">Видео</a>
                </li>
                <li class="footer__nav-item-b">
                    <a href="/technology" class="footer__nav-link-b link--main">Технологии</a>
                    <a href="/helpful" class="footer__nav-link-b link--main">Новинки</a>
                </li>
            </ul>
        </div>
    </div>
</footer>