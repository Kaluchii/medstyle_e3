<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Текстовый редактор' }}</label>
    <textarea class="form-control text-editor {{ !empty($class) ? $class : '' }}"
              data-name="{{ $field_name }}"
              data-type="text"
              data-block="{{ $block->name }}"
              data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">{{ $block->$field_name }}</textarea>
</div>