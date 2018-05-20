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
                    <li><p class="footer-text">Запись на процедуры: <span class="phone ringo-phone">{{$all_site->phone}}</span></p></li>
                    <li><p class="footer-text">WhatsApp: <span class="phone">{{$all_site->whatsapp}}</span></p></li>
                </ul>
            </div>
            <div class="footer-block">
                <ul>
                    <li><p class="footer-text">Полезные советы и скидки</p></li>
                    <li><p class="footer-text">в <a href="{{$all_site->fb}}" rel="nofollow" target="_blank" class="footer-link">Facebook</a> и <a href="{{$all_site->inst}}" rel="nofollow" target="_blank" class="footer-link">Instagram</a></p></li>
                </ul>
            </div>
        </div>
        <div class="footer-row">
            <div class="col">{!! $all_site->copyright !!}</div>
            <div class="col">Сделано<br>в <a href="http://interpro.kz"  rel="nofollow">ИнтерПро</a></div>
        </div>
    </footer>
@endsection
