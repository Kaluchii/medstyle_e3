<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Элемент {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="articles_pokazania">Удалить
        </button>
    </div>
    <div class="box-body">
        <div class="form-group">
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->p_name_field}}"
                   data-name="p_name"
                   data-type="string"
                   data-block="articles_pokazania"
                   data-id="{{$item->id_field}}">
        </div>
    </div>
</div>