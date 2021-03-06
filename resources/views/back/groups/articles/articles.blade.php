@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Публикация'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Вид ссылки в адресной строке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slug_field}}"
                               data-name="slug"
                               data-type="string"
                               data-block="articles"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ссылка на услугу</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->services_link_field}}"
                               data-name="services_link"
                               data-type="string"
                               data-block="articles"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Название публикации</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->articles_name_field}}"
                               data-name="articles_name"
                               data-type="string"
                               data-block="articles"
                               data-id="{{$item->id_field}}">
                    </div>

                    <div class="form-group">
                        <label>Изображение (в формате jpg, 600 на 370 пикселей)</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">
                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$item->bg_img_field->link}}?{{$item->bg_img_field->cache_index}}" class="kv-preview-data file-preview-image"
                                                     title="{{$item->bg_img_field->alt}}" alt="{{$item->bg_img_field->alt}}">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" data-block="articles"
                                                           data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                                           value="{{$item->bg_img_field->alt}}">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="button" tabindex="500" title="Clear selected files"
                                                class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                    class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                                        <button type="button" tabindex="500" title="Abort ongoing upload"
                                                class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                    class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                                        <div tabindex="500" class="btn btn-primary btn-file">
                                            <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                            <span class="hidden-xs">Выбрать изображение …</span>
                                            <input type="file" class="form-control file"
                                                   data-block="articles"
                                                   data-name="bg_img"
                                                   data-type="image"
                                                   data-id="{{$item->id_field}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

{{--                    <div class="form-group">--}}
{{--                        <label>Текст в превью</label>--}}
{{--                        <textarea class="form-control text" data-reg="true"--}}
{{--                                  data-name="preview_descr"--}}
{{--                                  data-type="string"--}}
{{--                                  data-block="articles"--}}
{{--                                  data-id="{{$item->id_field}}">{{$item->preview_descr_field}}</textarea>--}}
{{--                    </div>--}}

                    <div class="form-group">
                        <label>Изображение (в формате jpg, 1980 на 550 пикселей)</label>
                        <div class="dropzone">
                            <div class="file-input">
                                <div class="file-preview">
                                    <div class="input-group file-caption-main">
                                        <div class="file-preview-frame">
                                            <div class="kv-file-content">
                                                <img src="{{$item->img_field->link}}?{{$item->img_field->cache_index}}" class="kv-preview-data file-preview-image"
                                                     title="{{$item->img_field->alt}}" alt="{{$item->img_field->alt}}">
                                            </div>
                                            <div class="file-thumbnail-footer">
                                                <div class="file-actions">
                                                    <input type="text" class="form-control alt-text" data-block="articles"
                                                           data-type="images" data-id="{{$item->id_field}}" data-name="alt"
                                                           value="{{$item->img_field->alt}}">
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="input-group-btn">
                                        <button type="button" tabindex="500" title="Clear selected files"
                                                class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                                    class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span></button>
                                        <button type="button" tabindex="500" title="Abort ongoing upload"
                                                class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                                    class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span></button>
                                        <div tabindex="500" class="btn btn-primary btn-file">
                                            <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                                            <span class="hidden-xs">Выбрать изображение …</span>
                                            <input type="file" class="form-control file"
                                                   data-block="articles"
                                                   data-name="img"
                                                   data-type="image"
                                                   data-id="{{$item->id_field}}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label>Текстовый блок №1</label>
                        <textarea class="form-control text-editor"
                                  data-name="descr_1"
                                  data-type="string"
                                  data-block="articles"
                                  data-id="{{$item->id_field}}">{{$item->descr_1_field}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Блок справа №1</label>
                        <textarea class="form-control text-editor"
                                  data-name="right_side_1"
                                  data-type="string"
                                  data-block="articles"
                                  data-id="{{$item->id_field}}">{{$item->right_side_1_field}}</textarea>
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="articles_pokazania">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Показания </h3>
                        <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($item->articles_pokazania_group as $pok_item)
                                @include('back.groups.articles_pokazania.articles_pokazania_box', ['item' => $pok_item])
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="articles_protivopokazania">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Противопоказания </h3>
                        <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($item->articles_protivopokazania_group as $pr_item)
                                @include('back.groups.articles_protivopokazania.articles_protivopokazania_box', ['item' => $pr_item])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="articles"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="articles"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="articles"
                                  data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection