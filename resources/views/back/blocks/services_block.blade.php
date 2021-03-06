@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Услуги'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="form-group">
                    <label>Заголовок страницы</label>
                    <input class="form-control string"
                           type="text" placeholder=""
                           value="{{$block->title_field}}"
                           data-name="title"
                           data-type="string"
                           data-block="services_block"
                           data-id="0">
                </div>
                <div class="form-group">
                    <label>Количество категорий в 1-ом столбце</label>
                    <input class="form-control string"
                           type="number" placeholder=""
                           value="{{$block->count_1_field}}"
                           data-name="count_1"
                           data-type="int"
                           data-block="services_block"
                           data-id="0">
                </div>
                <div class="form-group">
                    <label>Количество категорий в 2-ом столбце</label>
                    <input class="form-control string"
                           type="number" placeholder=""
                           value="{{$block->count_2_field}}"
                           data-name="count_2"
                           data-type="int"
                           data-block="services_block"
                           data-id="0">
                </div>
                <div class="form-group">
                    <label>Количество категорий в 3-ем столбце</label>
                    <input class="form-control string"
                           type="number" placeholder=""
                           value="{{$block->count_3_field}}"
                           data-name="count_3"
                           data-type="int"
                           data-block="services_block"
                           data-id="0">
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box table-widget">
                            <div class="box-header with-border">
                                <h3 class="box-title">
                                    Список категорий
                                </h3>
                                <button type="button" data-parent="0" class="btn btn-primary pull-right add-group-item">Добавить</button>
                                <div class="col-xs-5 pull-right">
                                    <input type="text" class="form-control add-item"
                                           data-name="cat_name"
                                           data-block="serv_category"
                                           placeholder="Название элемента"
                                    >
                                </div>
                            </div>
                            <!-- /.box-header -->
                            <div class="box-body">
                                <table class="table table-bordered table-hover dataTable table-widget-selector" role="grid"
                                       aria-describedby="example2_info"
                                       data-block="serv_category">
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

                                    @foreach($block->serv_category_group as $item)
                                        @include('back.groups.serv_category.serv_category_row',['item' => $item])
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
            </div>
            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="services_block"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="services_block"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="services_block"
                                  data-id="0">{{$block->seo_description_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection