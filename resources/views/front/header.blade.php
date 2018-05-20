@section('header')
<header class="header">
    <div class="header-block">
        <p class="right-text"><a href="#quest" class="header-link ask-me-popup">Задать вопрос</a></p>
    </div>
    <div class="header-block">
        <a href="/" class="logo">
            <img src="/img/logo.png" alt="MEDSTYLE - клиника эстетической медицины">
        </a>
    </div>
    <div class="header-block">
        <p class="right-text ringo-phone">{{$all_site->phone}}</p>
    </div>
</header>
@endsection
