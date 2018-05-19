<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Элемент {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="tech_effect_up">Удалить
        </button>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Название услуги</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->serv_name_field}}"
                   data-name="serv_name"
                   data-type="string"
                   data-block="tech_effect_up"
                   data-id="{{$item->id_field}}">
        </div>
        <div class="form-group">
            <label>Ссылка на услугу</label>
            <input class="form-control string"
                   type="text" placeholder=""
                   value="{{$item->serv_name_field}}"
                   data-name="serv_name"
                   data-type="string"
                   data-block="tech_effect_up"
                   data-id="{{$item->id_field}}">
        </div>
    </div>
</div>