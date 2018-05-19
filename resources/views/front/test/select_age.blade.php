@extends('front.layout')
@include('front.menu')
@section('content')
    @include('front.test.meta')
    <?php $title = 'Тестирование | Medstyle.kz' ?>
    <article class="content">
        <div class="grid grid-pad">
            <h1 class="page-title">Для получения рекомендаций по косметологическим процедурам,</br>укажите сколько вам лет</h1>
        </div>
        <div class="grid grid-pad select_age">
            @foreach($age as $item)
            <div class="col-1-2">
                <a href="/test/{{$item->id_field}}">
                    <div class="wrap-age">
                        <p class="age">{!! $item->age_name_field !!}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </article>
@endsection
