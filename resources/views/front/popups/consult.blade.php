@section('popup_consult')
    <div class="overlay" id="consultation">
        <div class="popup_table">
            <div class="popup_cell">
                <div class="white-popup consult mfp-with-anim  mfp-hide" id="cons">
                    <div class="grid">
                        <h3 class="popup_title">Записаться на консультацию</h3>
                        <div class="col-1-2">
                            <div class="row">
                                <p class="row-name">Имя</p>
                                <input class="input popup_field" type="text" data-field-type="string"
                                       data-field-name="name">
                            </div>
                            <div class="row">
                                <p class="row-name">Почта</p>
                                <input class="input popup_field" type="text" data-field-type="string"
                                       data-field-name="phone">
                            </div>
                            <div class="row question-select">
                                <p class="row-name">Услуга</p>
                                <select class="input popup_field" data-field-type="numb" data-field-name="service_id">
                                    @foreach($serv as $item)
                                        <option value="{{$item->id_field}}">{{$item->name_field}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-1-2">
                            <div class="row">
                                <p class="row-name">Комментарий</p>
                                <textarea class="input popup_field" cols="30" rows="10" data-field-type="text"
                                          data-field-name="comment"></textarea>
                            </div>
                            <div class="row top">
                                <a class="send-ask" data-type-name="consultation" data-popup-id="cons">Отправить</a>
                            </div>
                        </div>
                    </div>
                    <div class="text">
                        Администрация свяжется с вами, чтобы оговорить точное время
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
