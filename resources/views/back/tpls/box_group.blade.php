<div class="box box-info group-item-widget" data-block="{{ $group_name }}">
    <div class="box-header with-border">
        <h3 class="box-title"> {{ !empty($title) ? $title : 'Список элементов' }} </h3>
        <button type="submit" data-parent="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
    </div>
    <div class="box-body">
        <div class="groupflat-widget group-item-wrap">
            @php($full_group_name = $group_name . '_group')
            @foreach($block->$full_group_name as $item)
                @include('back.groups.' . $group_name . '.' . $group_name . '_box', ['block' => $item])
            @endforeach
        </div>
    </div>
</div>
