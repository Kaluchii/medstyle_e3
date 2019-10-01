@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Что мы гарантируем'])

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Панель для редактирования данных</h3>
        </div>
        <div class="box-body">

            @include('back.tpls.string', [
            'title' => 'Заголовок',
            'field_name' => 'title',
            ])

            @include('back.tpls.box_group', [
            'title' => 'Блок "Особенности"',
            'group_name' => 'features_list'
            ])

        </div>
    </div>

@endsection
