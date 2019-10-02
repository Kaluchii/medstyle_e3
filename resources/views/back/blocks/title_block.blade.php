@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Особенности MedStyle'])

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Панель для редактирования данных</h3>
        </div>
        <div class="box-body">

        @include('back.tpls.text', [
       'title' => 'Большой заголовок',
       'field_name' => 'title',
       'type' => 'string',
       'class' => 'text--small',
       'br_replace' => true
       ])

        @include('back.tpls.image', [
        'title' => 'Изображение (в формате jpg, 1600 на 600 пикселей)',
        'field_name' => 'img'
        ])

        </div>
    </div>

@endsection
