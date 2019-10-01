@php($hide_cols = !empty($hide_cols) ? $hide_cols : [])
<div class="row">
    <div class="col-xs-12">
        <div class="box table-widget">
            <div class="box-header with-border">
                <h3 class="box-title"> {{ !empty($title) ? $title : 'Список элементов' }} </h3>
                <button type="button" data-parent="{{ $block->getType()->fieldExist('id') ? $block->id : '0' }}" class="btn btn-primary pull-right add-group-item">Добавить</button>
                <div class="col-xs-5 pull-right">
                    <input type="text" class="form-control add-item"
                           data-name="{{ !empty($input_field_name) ? $input_field_name : 'title' }}"
                           data-block="{{ $group_name }}"
                           placeholder="Название элемента"
                    >
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered table-hover dataTable table-widget-selector"
                       data-block="{{ $group_name }}">
                    <thead>
                    <tr role="row">
                        @if(!in_array('id', $hide_cols))
                            <th class="sorting" tabindex="0" rowspan="1" colspan="1">ID</th>
                        @endif
                        @if(!in_array('name', $hide_cols))
                            <th class="sorting" tabindex="0" rowspan="1" colspan="1">Имя</th>
                        @endif
                        @if(!in_array('updated_at', $hide_cols))
                            <th class="sorting" tabindex="0" rowspan="1" colspan="1">Дата редактирования</th>
                        @endif
                        @if(!in_array('status', $hide_cols))
                            <th class="sorting" tabindex="0" rowspan="1" colspan="1">Статус публикации</th>
                        @endif
                        @if(!in_array('sorter', $hide_cols))
                            <th class="sorting" tabindex="0" rowspan="1" colspan="1">Порядок выдачи</th>
                        @endif
                        @if(!in_array('del', $hide_cols))
                            <th tabindex="0"  rowspan="1" colspan="1">Удаление</th>
                        @endif
                    </tr>
                    </thead>

                    <tbody>

                    @php($full_group_name = $group_name . '_group')
                    @foreach($block->$full_group_name as $item)
                        @include('back.groups.' . $group_name . '.' . $group_name . '_row', ['block' => $item])
                    @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>
</div>
