@extends('front.layout')
@include('front.menu')
@section('content')
@include('front.test.meta')
@php $title = 'Тестирование | MEDSTYLE Алматы' @endphp
    <article class="content">
        <div class="grid grid-pad">
            <h1 class="page-title">{!! $test->page_title !!}</h1>
        </div>
        <div class="grid grid-pad select_age">
            @foreach($test->age_group as $item)
            <div class="col-1-2">
                <a href="/test/{{$item->id}}">
                    <div class="wrap-age">
                        <p class="age">{!! $item->age_name !!}</p>
                    </div>
                </a>
            </div>
            @endforeach

        </div>
    </article>
@endsection
