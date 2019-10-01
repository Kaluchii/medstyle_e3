<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Файл' }}</label>
    <div class="dropzone">
        <div class="file-input">
            <div class="file-preview">
                <div class="input-group file-caption-main">
                    <div class="file-preview-frame">
                        <div class="kv-file-content">
                            <p style="font-size: 120px;"><i class="fa fa-file-image-o"></i></p>
                        </div>
                        <div class="file-thumbnail-footer">
                            <div class="file-actions">
                                <input type="text"
                                       class="form-control title"
                                       data-block="{{ $block->name }}"
                                       data-name="title"
                                       data-type="file"
                                       value="{{ $block->$field_name->title }}"
                                       data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}"
                                       placeholder="Имя файла при скачивании">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" title="Очистить выбранные файлы"
                            class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Удалить</span>
                    </button>
                    <button type="button" title="Прервать текущую загрузку"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Отмена</span>
                    </button>
                    <div class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать …</span>
                        <input type="file" class="form-control files"
                               data-block="{{ $block->name }}"
                               data-name="{{ $field_name }}"
                               data-type="file"
                               data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>