@php($hide_cols = !empty($hide_cols) ? $hide_cols : [])
<tr role="row" class="odd" data-id="{{ $block->id }}">

    {{-- ID --}}
    @if(!in_array('id', $hide_cols))
        <td>{{ $block->id }}</td>
    @endif

    {{-- Название --}}
    @if(!in_array('name', $hide_cols))
        <td class="sorting_1">
            <a href="{{ $page_item_url }}/{{ $block->id }}" class="">{{ $block->$input_field_name }}</a>
        </td>
    @endif

    {{-- Дата последнего редактирования --}}
    @if(!in_array('updated_at', $hide_cols))
        <td> {{ $block->getField('updated_at')->getItem()->getDate() }} </td>
    @endif

    {{-- Опубликовано --}}
    @if(!in_array('status', $hide_cols))
        <td data-order="{{ $block->show }}">
            <select class="form-control group-show"
                    data-id="{{ $block->id }}"
                    data-block="{{ $group_name }}"
                    data-name="show">
                <option value="false" @if(!$block->show) selected @endif>Не опубликовано</option>
                <option value="true" @if($block->show) selected @endif>Опубликовано</option>
            </select>
        </td>
    @endif

    {{-- Сортировка --}}
    @if(!in_array('sorter', $hide_cols))
        <td data-order="{{ $block->sorter }}">
            <input type="number" class="form-control group-sorter"
                   data-id="{{ $block->id }}"
                   data-block="{{ $group_name }}"
                   data-name="sorter"
                   value="{{ $block->sorter }}">
        </td>
    @endif

    {{-- Удаления --}}
    @if(!in_array('del', $hide_cols))
        <td>
            <button type="button" class="btn btn-block btn-primary group-remove-item"
                    data-id="{{ $block->id }}" data-block="{{ $group_name }}">Удалить</button>
        </td>
    @endif

</tr>