<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title> <?php echo $title ?> </title>

    <meta name="csrf-token" content="{{ csrf_token() }}">
	<meta name="cmsmagazine" content="8595dcaa5a4b96a7f4b87b77b13368cb" />
    <link rel="shortcut icon" href="/images/1374164082_med_0.png" type="image/png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('meta')
    @yield('page_close')
    @include('front.scripts')
    @include('front.styles')
    @include('front.header')
    @include('front.footer')
    @include('front.popups.question')
    @include('front.popups.thank')

    @yield('styles')
</head>
<body>
    <div class="wrapper">
        <div class="header-wrap">
            @yield('header')
        </div>
        <div class="menu-wrap">
            @yield('menu')
        </div>
        @yield('content')
        @yield('footer')
    </div>
        @yield('popup_question')
        @yield('popup_consult')
        @yield('thank')
</body>
@yield('scripts')
<script type="text/javascript">
    (function(d, w, s) {
        var widgetHash = 'NKjY6RoYZr', ctw = d.createElement(s); ctw.type = 'text/javascript'; ctw.async = true;
        ctw.src = '//widgets.binotel.com/calltracking/widgets/'+ widgetHash +'.js';
        var sn = d.getElementsByTagName(s)[0]; sn.parentNode.insertBefore(ctw, sn);
    })(document, window, 'script');
</script>
<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter22132025 = new Ya.Metrika({
                    id:22132025,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/22132025" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-80787415-1', 'auto');
  ga('require', 'ringostat');
  ga('send', 'pageview');

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
