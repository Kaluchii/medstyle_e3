<!DOCTYPE html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-TK7ZV3R');</script>
    <!-- End Google Tag Manager -->
    @yield('google_tag_header')
    @if($app->environment('local'))
        <meta name="robots" content="noindex, nofollow" />
    @endif
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="cmsmagazine" content="8595dcaa5a4b96a7f4b87b77b13368cb" />
    <link rel="shortcut icon" href="/img/fav.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="googlebot" content="NOODP" />
    <meta name="publisher" content="Medstyle"/>
    <meta name="author" content="Medstyle"/>
    <meta name="copyright" content="Medstyle" />
    <meta name="revisit-after" content="2 days" />
    <link rel="preload" href="/img/procedures-item-bg-1-h.svg" as="image">
    <link rel="preload" href="/img/procedures-item-bg-2-h.svg" as="image">
    <link rel="preload" href="/img/procedures-item-bg-3-h.svg" as="image">
    <link rel="preload" href="/img/procedures-item-bg-4-h.svg" as="image">
    <link rel="preload" href="/img/procedures-item-bg-5-h.svg" as="image">
    <link rel="preload" href="/img/procedures-item-bg-6-h.svg" as="image">
    @yield('meta')
    @include('front.scripts')
    @include('front.styles')
    @include('front.header')
    @include('front.popups.question')
    @include('front.popups.thank')
    @yield('styles')
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TK7ZV3R"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @yield('google_tag_body')
    <div class="wrapper">
        <div class="header-wrap">
            @yield('header')
        </div>
        <div class="menu-wrap">
            @yield('menu')
        </div>
        @include('front.mob_menu')
        @yield('content')
        @include('front.footer')
    </div>
        @yield('popup_question')
        @yield('popup_consult')
        @yield('thank')
        @yield('scripts')
</body>
<script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = 'NKjY6RoYZr', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
        ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
    })(document, window, 'script');
</script>
<script type="text/javascript">
    (function (d,s,u,e,p) {
        p=d.getElementsByTagName(s)[0],e=d.createElement(s),e.async=1,e.src=u,p.parentNode.insertBefore(e, p);
    })(document, 'script', 'https://ringostat.com/numbers/v4/b9/b9b2dab3c77dc719f8fbb7f182e75dd792cec29e.js');
</script>
<!— BEGIN JIVOSITE CODE {literal} —>
<script type='text/javascript'>
(function(){ var widget_id = 'rc14jRjQnt';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!— {/literal} END JIVOSITE CODE —>
</html>
