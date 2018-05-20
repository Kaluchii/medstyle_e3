@extends('front.layout')
@include('front.menu')
@section('content')
    @php $title = 'Результаты теста | MEDSTYLE Алматы' @endphp
    @include('front.test.meta')
    <article class="content" data-page="recomend">
        <div class="grid grid-pad">
            <div class="col-1-1">
            </div>
        </div>
        <div class="grid grid-pad testing-ans">
            <div class="col-1-1">
                <h1 class="test-title">Рекомендации основаны на ваших ответах</h1>
            </div>
            <div class="col-1-2 acp-after">
                <div class="img-test">
                    <img src="/img/photo.png" alt="">
                </div>
            </div>
            <div class="col-1-2 left ret-1">
                <div class="text append">
                    В соответствии с вашими ответами, мы рекомендуем обратить внимание на процедуры, расположенные ниже.
                    Процедуры эффективно решают указанные косметологические проблемы. Перейдите по ссылке чтобы
                    ознакомится с детальным описанием процедуры.
                </div>
            </div>
        </div>
        <div class="grid grid-pad testing-ans">
            <div class=""></div>
            <div class="col-1-2 bookmark">
                <div class="gray">
                    <p class="text">
                        Добавьте результат теста в закладки браузера, чтобы вернуться к нему позднее.
                    </p>
                    <button class="bookmark add">Добавить</button>
                </div>
            </div>
            <div class="col-1-2 left ret-2">
                <div class="testing-ans-bloks">
                    @php $i = 0 @endphp
                    @foreach($answers as $item)
                        @php $i++ @endphp
                        <div class="testing-answer">
                            <p class="answ-title">{{$numbs[$i]}} {{$item->question_name_field}}</p>
                            <p class="ans-text">{!! $item->question_answer_text_field !!}</p>
                            @foreach($item->recommend_group as $recommend)
                                @foreach($all_services as $item_s)
                                    @if($item_s->id_field == $recommend->service_id_field)
                                        <p><a class="link" href="/service/{{$item_s->slug_field}}"
                                              target="_blank">{{$item_s->name_field}}</a>@if($item_s->discount_field != '')
                                                <span class="discount">{{$item_s->discount_field}}</span>@endif&nbsp;→</p>
                                    @endif
                                @endforeach
                            @endforeach
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection
