@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Категория вопросов'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Название категории</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->age_name_field}}"
                       data-name="age_name"
                       data-type="string"
                       data-block="age"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Заголовок теста</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->text_field}}"
                       data-name="text"
                       data-type="string"
                       data-block="age"
                       data-id="{{$item->id_field}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-xs-12">
            <div class="box table-widget">
                <div class="box-header with-border">
                    <h3 class="box-title">
                        Список вопросов
                    </h3>
                    <button type="button" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                    <div class="col-xs-5 pull-right">
                        <input type="text" class="form-control add-item"
                               data-name="question_name"
                               data-block="anket_item"
                               placeholder="Название элемента"
                        >
                    </div>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                    <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                           aria-describedby="example2_info"
                           data-block="anket_item">
                        <thead>
                        <tr role="row">
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">ID</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Название</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Дата редактирования</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Статус публикации</th>
                            <th class="sorting" tabindex="0" aria-controls="example2" rowspan="1"
                                colspan="1" aria-label="">Порядок выдачи</th>
                            <th  tabindex="0"  rowspan="1"
                                 colspan="1" aria-label="">Удаление</th>
                        </tr>
                        </thead>
                        <tbody>

                        @foreach($item->anket_item_group as $anket_item)
                            @include('back.groups.anket_item.anket_item_row',['item' => $anket_item])
                        @endforeach

                        </tbody>

                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>


@endsection