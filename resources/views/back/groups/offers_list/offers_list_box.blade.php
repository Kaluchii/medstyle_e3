<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Компонент №{{ $block->sorter }}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{ $block->id }}"
                data-block="{{ $block->name }}">Удалить
        </button>
    </div>

    <div class="box-body">
        @include('back.tpls.string', [
        'title' => 'Заголовок',
        'field_name' => 'offers_title'
        ])

        @include('back.tpls.text', [
        'title' => 'Текст',
        'field_name' => 'text'
        ])

        @include('back.tpls.string', [
        'title' => 'Скидка',
        'field_name' => 'offers_discount'
        ])

        @include('back.tpls.string', [
        'title' => 'Длительность акции',
        'field_name' => 'offers_date'
        ])

        @include('back.tpls.image', [
        'title' => 'Изображение (в формате jpg, 260 на 260 пикселей)',
        'field_name' => 'img'
        ])

        <div class="col-xs-1 no-padding">
            @include('back.tpls.int', [
            'title' => 'Позиция',
            'block' => $block,
            'field_name' => 'sorter'
            ])
        </div>
    </div>
</div>
