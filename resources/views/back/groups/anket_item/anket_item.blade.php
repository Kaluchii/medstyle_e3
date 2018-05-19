@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Вопрос теста'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название вопроса</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->question_name_field}}"
                       data-name="question_name"
                       data-type="string"
                       data-block="anket_item"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Текст вопроса</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->question_text_field}}"
                       data-name="question_text"
                       data-type="string"
                       data-block="anket_item"
                       data-id="{{$item->id_field}}">
            </div>

            <div class="box box-info group-item-widget" data-block="recommend">
                <div class="box-header with-border">
                    <h3 class="box-title"> Рекомендуемые услуги </h3>
                    <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                </div>
                <div class="box-body">
                    <div class="groupflat-widget group-item-wrap">
                        @foreach($item->recommend_group as $rec_item)
                            @include('back.groups.recommend.recommend_box', ['item' => $rec_item, 'services_block' => $services_block])
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection