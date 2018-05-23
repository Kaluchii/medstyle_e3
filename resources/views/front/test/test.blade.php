@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.test.meta')
@php $title = 'Тестирование | MEDSTYLE Алматы' @endphp
    <article class="content" data-page="testing">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <h1 class="test-title">{{$test->text}}</h1>
            </div>
        </div>
        <div class="hide_block">
            @foreach($test->anket_item_group as $item)
                <p data-quest-id="{{$item->id}}">{{$item->question_text}}</p>
            @endforeach
        </div>
        <div class="grid grid-pad">
            <div class="col-1-1">
                <div class="test-questions ">
                    <div class="testing-quest" data-item="0">
                        <div class="grid text">
                            <div class="col-1-2 left">
                                <span class="numb">1</span> из <span class="count">15</span>
                            </div>
                            <div class="col-1-2 right btn-acp">
                                <a href="#" class="stop-quest">Завершить тест в текущей точке</a>
                            </div>
                        </div>
                        <div class="grid quest">
                            <div class="col-1-1">
                                @php
                                    $first_item = $test->anket_item_group->first();
                                    $first = $first_item->question_text;
                                    $id    = $first_item->id;
                                @endphp
                                <p class="ask-text" data-quest-id="{{$id}}">1. {{$first}}</p>
                            </div>
                        </div>
                        <div class="grid buttons-grid">
                            <div class="col-1-2 left old-acp">
                                <button class="prev">
                                    Предыдущий вопрос
                                </button>
                            </div>
                            <div class="col-1-2 right">
                                <button class="no">Нет</button>
                                <button class="yes">Да</button>
                            </div>
                        </div>
                    </div>
                    <p class="center-top"></p>
                </div>
            </div>
        </div>
    </article>
@endsection