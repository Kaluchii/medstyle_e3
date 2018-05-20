@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'О клинике'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Заголовок страницы</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->title_field}}"
                               data-name="title"
                               data-type="string"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Текст</label>
                        <textarea class="form-control text-editor"
                                  data-name="text"
                                  data-type="string"
                                  data-block="about"
                                  data-id="0">{{$block->text_field}}</textarea>
                    </div>
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
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$block->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="about"
                               data-id="0">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="about"
                                  data-id="0">{{$block->seo_description_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection