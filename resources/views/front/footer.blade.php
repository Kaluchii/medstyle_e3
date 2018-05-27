@section('footer')
    <footer class="footer">
        <div class="footer-wrapper">
            <div class="footer-block">
                <ul>
                    <li><a href="/contacts" class="footer-link">Карта проезда</a></li>
                    <li><a href="#quest" class="footer-link ask-me-popup">Задать вопрос</a></li>
                </ul>
            </div>
            <div class="footer-block">
                <ul>
                    <li><p class="footer-text">Запись на процедуры</p><p class="big-phone ringo-phone">{{$all_site->phone}}</p></li>
                    <li class="wa-block"><p class="footer-text">WhatsApp: <span class="phone">{{$all_site->whatsapp}}</span></p></li>
                </ul>
            </div>
            <div class="footer-block footer-block--social">
                <ul>
                    <li><p class="footer-text">Полезные советы и скидки в&nbsp;наших&nbsp;группах</p></li>
                    <li><a href="{{$all_site->fb}}" class="footer-soc-link footer-soc-link__fb" rel="nofollow" target="_blank"></a><a href="{{$all_site->inst}}" class="footer-soc-link footer-soc-link__inst" rel="nofollow" target="_blank"></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-row">
            <div class="col">{!! $all_site->copyright !!}</div>
            <div class="col">Сделано<br>в <a href="http://interpro.kz"  rel="nofollow">ИнтерПро</a></div>
        </div>
    </footer>
@endsection
