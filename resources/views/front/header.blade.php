@section('header')
<header class="header">
    <div class="header__block fade fadeInUp js_animation" data-offset="0">
        @if(Request::is('/'))
            <span class="logo">
                <img class="header__logo" src="/img/logo.svg" alt="MEDSTYLE - клиника эстетической медицины">
            </span>
        @else
            <a href="/" class="logo">
                <img class="header__logo" src="/img/logo.svg" alt="MEDSTYLE - клиника эстетической медицины">
            </a>
        @endif
    </div>
</header>
@endsection
