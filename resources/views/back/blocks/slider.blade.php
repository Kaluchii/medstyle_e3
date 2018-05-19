@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Слайдер'])
    <div class="box box-info group-item-widget" data-block="slides">
        <div class="box-header with-border">
            <h3 class="box-title"> Изображения в слайдере (jpg, png 480×350 или 330х350 пикселей) </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->slides_group as $item)
                    @include('back.groups.slides.slides_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection