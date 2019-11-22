@extends('front.layout')
@include('front.menu')
@section('content')
@if($slug == '' || empty($problem))
    @include('front.meta', ['title' => $questions->seo_title, 'description' => $questions->seo_description, 'keywords' => $questions->seo_keywords])
@else
    @include('front.meta', ['title' => $problem->seo_title, 'description' => $problem->seo_description, 'keywords' => $problem->seo_keywords])
@endif
    <div class="content-head questions-page" style="background: url('/img/questions_bg.jpg') no-repeat center top;">
        <div class="wrapper-block">
            <h1 class="content-head-title content-head-title--question title--l1">{{$questions->title}}</h1>
            <div class="all-product category">
                <select class="all-techno">
                    <option @if($slug == '') selected @endif value="/questions">Все категории</option>
                    @foreach($problems->problems_group as $item)
                        <option value="/questions/{{$item->slug}}" @if($slug == $item->slug) selected @endif>{{$item->problem_name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
    <article class="content" data-page="questions">
        <div class="grid grid-pad question-page">
            <div class="col-1-2">
                @foreach($questions->questions_group as $item)
                    <div class="questions">
                        <div class="question">
                            <p class="question-text">{!! $item->question_text !!}</p>
                            <p class="question-human">{{$item->question_name}}</p>
                        </div>
                        <div class="answer-row">
                            <div class="answer-wrapper">
                                <div class="grid test">
                                    <div class="answer-wrapper2">
                                        <div class="answer">
                                            <div class="text-wrapper">
                                                @foreach($specialists->specialists_group as $spec_item)
                                                    @if($spec_item->id == $item->spec_id)
                                                    <div class="specialist">
                                                        <img src="{{$spec_item->img->small_spec_resize->link}}?{{$spec_item->img->small_spec_resize->cache_index}}" alt="{{$spec_item->img->alt}}" width="102px" class="photo">
                                                    </div>
                                                    <p class="specialist-name">{{$spec_item->spec_name}}</p>
                                                    <p class="specialist-profession">{{$spec_item->profession}}</p>
                                                    @endif
                                                @endforeach
                                                <div class="answer-text">{!! $item->answer_text !!}</div>
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
                    <div class="row">
                        <label class="public">
                            <input type="checkbox" checked class="popup_field" data-field-type="bool" data-field-name="is_public">
                            <span></span>
                            Ответ можно опубликовать
                        </label>
                    </div>
                    <div class="row">
                        <span class="prompt">Заполните все поля</span>
                        <a class="send-ask" data-type-name="question" data-popup-id="question-page">Отправить</a>
                    </div>
                </div>
            </div>
        </div>
    </article>
@endsection
