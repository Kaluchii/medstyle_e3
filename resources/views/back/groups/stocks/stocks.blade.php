@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Акция'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Заголовок (используйте "#" для указания начала и "#" для указания окончания ссылочноко текста)</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->stock_name_field}}"
                       data-name="stock_name"
                       data-type="string"
                       data-block="stocks"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Ссылка на акцию</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->link_field}}"
                       data-name="link"
                       data-type="string"
                       data-block="stocks"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Время проведения акции</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->discount_field}}"
                       data-name="discount"
                       data-type="string"
                       data-block="stocks"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Превью</label>
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
                                            <input type="text" class="form-control alt-text" data-block="stocks"
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
                                           data-block="stocks"
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
                <label>Текст</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="text"
                          data-type="string"
                          data-block="stocks"
                          data-id="{{$item->id_field}}">{{$item->text_field}}</textarea>
            </div>
        </div>
    </div>
@endsection