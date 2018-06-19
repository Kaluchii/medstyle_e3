@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.test.meta', ['title' => 'Результаты теста | MEDSTYLE Алматы'])
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
                    @foreach($answers->anket_item_group as $item)
                        @php $i++ @endphp
                        @foreach($yes_list as $yes_item)
                            @if($item->id == $yes_item)
                                <div class="testing-answer">
                                    <p class="answ-title">{{$i.'.'}} {{$item->question_name}}</p>
                                    {{--<p class="ans-text">{!! $item->question_text !!}</p>--}}
                                    @foreach($item->recommend_group as $recommend)
                                        @foreach($all_services->serv_category_group as $item_cat)
                                            @foreach($item_cat->services_group as $item_s)
                                                @if($item_s->id == $recommend->service_id)
                                                    <p><a class="link" href="/service/{{$item_s->slug}}"
                                                          target="_blank">{{$item_s->serv_name}}</a>@if($item_s->discount_common != '')
                                                            <span class="discount">{{$item_s->discount_common}}</span>@endif&nbsp;→</p>
                                                @endif
                                            @endforeach
                                        @endforeach
                                    @endforeach
                                </div>
                            @endif
                        @endforeach
                    @endforeach
                </div>
            </div>
        </div>
    </article>
@endsection
