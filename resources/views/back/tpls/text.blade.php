<div class="form-group">
    <label>{{ !empty($title) ? $title : 'Текстовое поле' }}</label>
    <textarea class="form-control text {{ !empty($class) ? $class : '' }}" @if(!empty($br_replace) && $br_replace) data-reg="true" @endif
              data-name="{{ $field_name }}"
              data-type="{{ !empty($type) ? $type : 'text' }}"
              data-block="{{ $block->name }}"
              data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">{{ $block->$field_name }}</textarea>
</div>