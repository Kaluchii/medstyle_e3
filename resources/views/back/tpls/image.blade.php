<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Изображение' }}</label>
    <div class="dropzone">
        <div class="file-input">
            <div class="file-preview">
                <div class="input-group file-caption-main">
                    <div class="file-preview-frame">
                        <div class="kv-file-content">
                            <img src="{{ $block->$field_name->link }}?{{ $block->$field_name->cache_index }}"
                                 class="kv-preview-data file-preview-image"
                                 title="{{ $block->$field_name->alt }}" alt="{{ $block->$field_name->alt }}">
                        </div>
                        <div class="file-thumbnail-footer">
                            <div class="file-actions">
                                <input type="text" class="form-control alt-text"
                                       data-block="{{ $block->name }}"
                                       data-type="images"
                                       data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}"
                                       data-name="alt"
                                       value="{{ $block->$field_name->alt }}">
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="input-group-btn">
                    <button type="button" title="Очистить выбранные файлы"
                            class="btn btn-default fileinput-remove fileinput-remove-button"><i
                                class="glyphicon glyphicon-trash"></i> <span class="hidden-xs">Очистить</span>
                    </button>
                    <button type="button" title="Abort ongoing upload"
                            class="btn btn-default hide fileinput-cancel fileinput-cancel-button"><i
                                class="glyphicon glyphicon-ban-circle"></i> <span class="hidden-xs">Cancel</span>
                    </button>
                    <div class="btn btn-primary btn-file">
                        <i class="glyphicon glyphicon-folder-open"></i>&nbsp;
                        <span class="hidden-xs">Выбрать изображение …</span>
                        <input type="file" class="form-control file"
                               data-block="{{ $block->name }}"
                               data-name="{{ $field_name }}"
                               data-type="image"
                               data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>