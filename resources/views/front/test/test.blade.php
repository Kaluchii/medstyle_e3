@extends('front.layout')
@include('front.menu')
@section('content')
    <?php $title = 'Тестирование | MEDSTYLE Алматы' ?>
    @include('front.test.meta')
    <article class="content" data-page="testing">
        <div class="grid grid-pad">
            <div class="col-1-1">
                <h1 class="test-title">@foreach($test_title as $item) {{$item->testing_title_field}}  @endforeach</h1>
            </div>
        </div>
        <div class="hide_block">
            <?php $i = 0?>
            @foreach($answers as $item)
                <?php $i++ ?>
                @if ($i == 1)
                    <?php $first = $item->question_text_field;
                          $id    = $item->id_field;?>
                @endif
                <p data-quest-id="{{$item->id_field}}">{{$item->question_text_field}}</p>
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