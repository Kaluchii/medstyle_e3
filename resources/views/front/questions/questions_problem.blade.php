@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.test.meta')
    <?php $title = $quest->page_title_field ?>
    <div class="content-head questions-page"
         style="background: url(/images/{{$quest->background_image->primary_link}}) no-repeat center top;">
        <div class="wrapper-block">
            <h1 class="content-head-title">{{$quest->title_field}}</h1>
            <div class="all-product category">
                <select class="all-techno">

                    @foreach($problem as $item)
                        <option value="/questions/{{$item->slug_field}}">{{$item->name_field}}</option>
                    @endforeach
                    <option value="/questions">Все категории</option>
                </select>

            </div>
        </div>
    </div>
    <article class="content" data-page="questions">


        <div class="grid grid-pad question-page">
            <div class="col-1-2">
                @foreach($questions as $item)
                    <div class="questions">
                        <div class="question">
                            <p class="question-text">{!! $item->question_text_field !!}</p>
                            <p class="question-human">{{$item->question_name_field}}</p>
                        </div>
                        <div class="answer-row">
                            <div class="answer-wrapper">
                                <div class="grid test">
                                    <div class="answer-wrapper2">
                                        <div class="answer">
                                            <div class="text-wrapper">
                                                <div class="specialist">
                                                    @foreach($spec as $spec_item)
                                                        @if($spec_item->id_field  == $item->spec_id_field)
                                                            <img src="/images/{{$spec_item->spec_photo_image->icon_link}}"
                                                                 alt="{{$spec_item->spec_photo_image->alt}}" class="photo">
                                                        @endif
                                                    @endforeach
                                                </div>
                                                @foreach($spec as $spec_item)
                                                    @if($spec_item->id_field  == $item->spec_id_field)
                                                        <p class="specialist-name">{{$spec_item->name_field}}</p>
                                                    @endif
                                                @endforeach
                                                @foreach($spec as $spec_item)
                                                    @if($spec_item->id_field  == $item->spec_id_field)
                                                        <p class="specialist-profession">{{$spec_item->profession_field}}</p>
                                                    @endif
                                                @endforeach
                                                <div class="answer-text">{!! $item->answer_text_field !!}</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="col-1-2 tofirst">
                <div class="ask-me" id="question-page">
                    <div class="row">
                        <p class="row-name">Имя</p>
                        <input class="input popup_field" type="text" data-field-type="string" data-field-name="name">
                    </div>
                    <div class="row">
                        <p class="row-name">Почта</p>
                        <input class="input popup_field" type="text" data-field-type="string" data-field-name="mail">
                    </div>
                    <div class="row">
                        <p class="row-name">Вопрос</p>
                        <textarea class="input popup_field" cols="30" rows="10" data-field-type="text"
                                  data-field-name="question"></textarea>
                    </div>

                    <div class="row">
                        <label class="public">
                            <input type="checkbox" checked="" data-field-type="bools" data-field-name="is_public">
                            <span></span>
                            Ответ можно опубликовать
                        </label>
                    </div>
                    <div class="row">
                        <span class="prompt">Заполните все поля</span>
                        <a class="send-ask" data-type-name="questions" data-popup-id="question-page">Отправить</a>

                    </div>
                </div>
            </div>
        </div>


    </article>
@endsection
