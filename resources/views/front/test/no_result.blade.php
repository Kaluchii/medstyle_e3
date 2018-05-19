@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.test.meta')
    <?php $title = 'Результаты теста | MEDSTYLE Алматы' ?>
    <article class="content" data-page="recomend">
        <div class="grid grid-pad">
            <div class="col-1-1">
            </div>
        </div>
        <div class="grid grid-pad testing-ans">
            <div class="col-1-1">
                <h1 class="test-title">Результаты теста</h1>
            </div>
            <div class="col-1-2 acp-after">
                <div class="img-test">
                    <img src="/images/photo.png" alt="">
                </div>
            </div>
            <div class="col-1-2 left ret-1">
                <div class="text append text-block">
                   <h1> Поздравляем!</h1>
                  <p>  У вас нет косметологических проблем.</p>
                </div>
            </div>
        </div>
        <div class="grid grid-pad testing-ans">
        </div>
    </article>
@endsection