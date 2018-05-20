<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Причина {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="problems">Удалить
        </button>
    </div>
    <div class="box-body">

        <div class="form-group">
            <label>Название</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->problem_name_field}}"
                   data-name="problem_name"
                   data-type="string"
                   data-block="problems"
                   data-id="{{$item->id_field}}">
        </div>

        <div class="form-group">
            <label>Вид ссылки в адресной строке</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->slug_field}}"
                   data-name="slug"
                   data-type="string"
                   data-block="problems"
                   data-id="{{$item->id_field}}">
        </div>

    </div>
</div>