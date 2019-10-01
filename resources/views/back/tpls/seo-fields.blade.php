<div class="form-group">
    <label>Тайтл</label>
    <input class="form-control string"
           type="text"
           value="{{ $block->seo_title }}"
           data-name="seo_title"
           data-type="seo"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
<div class="form-group">
    <label>Ключевые слова (keywords)</label>
    <input class="form-control string"
           type="text"
           value="{{ $block->seo_keywords }}"
           data-name="seo_keywords"
           data-type="seo"
           data-block="{{ $block->name }}"
           data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">
</div>
<div class="form-group">
    <label>Описание страницы (description)</label>
    <textarea class="form-control text"
              data-name="seo_description"
              data-type="seo"
              data-block="{{ $block->name }}"
              data-id="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}">{{ $block->seo_description }}</textarea>
</div>