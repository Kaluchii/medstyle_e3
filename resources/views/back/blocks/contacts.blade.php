@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Контакты'])
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
                       data-block="contacts"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Текст</label>
                <textarea class="form-control text-editor"
                          data-name="contacts"
                          data-type="string"
                          data-block="contacts"
                          data-id="0">{{$block->contacts_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Карта</label>
                <textarea class="form-control text-editor"
                          data-name="maps"
                          data-type="string"
                          data-block="contacts"
                          data-id="0">{{$block->maps_field}}</textarea>
            </div>

            <div class="form-group">
                <label>Фото клиники</label>
                <div class="dropzone">
                    <div class="file-input">
                        <div class="file-preview">
                            <div class="input-group file-caption-main">
                                <div class="file-preview-frame">
                                    <div class="kv-file-content">
                                        <img src="{{$block->img_field->link}}?{{$block->img_field->cache_index}}" class="kv-preview-data file-preview-image"
                                             title="{{$block->img_field->alt}}" alt="{{$block->img_field->alt}}">
                                    </div>
                                    <div class="file-thumbnail-footer">
                                        <div class="file-actions">
                                            <input type="text" class="form-control alt-text" data-block="contacts"
                                                   data-type="images" data-id="0" data-name="alt"
                                                   value="{{$block->img_field->alt}}">
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
                                           data-block="contacts"
                                           data-name="img"
                                           data-type="image"
                                           data-id="0">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection