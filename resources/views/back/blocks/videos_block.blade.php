@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Видео'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок страницы</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->title_field}}"
                       data-name="title"
                       data-type="string"
                       data-block="videos_block"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Текст под заголовком</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="text"
                          data-type="string"
                          data-block="videos_block"
                          data-id="0">{{$block->text_field}}</textarea>
            </div>
        </div>
    </div>
    <div class="box box-info group-item-widget" data-block="videos">
        <div class="box-header with-border">
            <h3 class="box-title"> Видео </h3>
            <button type="submit" data-parent="0" class="btn btn-primary pull-right add-flat-item">Добавить</button>
        </div>
        <div class="box-body">

            <div class="groupflat-widget group-item-wrap">
                @foreach($block->videos_group as $item)
                    @include('back.groups.videos.videos_box', ['item' => $item])
                @endforeach
            </div>
        </div>
    </div>
@endsection