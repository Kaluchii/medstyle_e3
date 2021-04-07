@section('popup_question')
<div class="overlay" id="questions">
    <div class="popup_table">
        <div class="popup_cell">
            <div id="quest" class="white-popup mfp-with-anim mfp-hide" data-popup="send">
                <p class="popup_title">Задать вопрос</p>
                <div class="row">
                    <p class="row-name">Имя</p>
                    <input class="input popup_field" type="text" data-field-type="string" data-field-name="user_name">
                </div>
                <div class="row">
                    <p class="row-name">Почта</p>
                    <input class="input popup_field" type="text" data-field-type="string" data-field-name="email">
                </div>
                <div class="row">
                    <p class="row-name">Вопрос</p>
                    <textarea class="input popup_field"  cols="30" rows="10" data-field-type="text" data-field-name="question"></textarea>
                </div>

                <div class="row last-row-quest">
                    <label class="public">
                    </label>
                    <a class="send-ask" data-type-name="question" data-popup-id="quest">Отправить</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
