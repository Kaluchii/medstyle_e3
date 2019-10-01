<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Строковое поле' }}</label>
    <input class="form-control string {{ !empty($class) ? $class : '' }}"
           type="text"
           value="{{ $block->$field_name }}"
           data-name="{{ $field_name }}"
           data-type="string"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
