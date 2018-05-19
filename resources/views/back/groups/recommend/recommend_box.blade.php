<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Услуга {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="recommend">Удалить
        </button>
    </div>
    <div class="box-body">
        <div class="form-group">
            <label>Специалист</label>
            <select  class="form-control int"
                     data-name="service_id"
                     data-type="int"
                     data-block="recommend"
                     data-id="{{$item->id_field}}">
                @foreach($services_block->serv_category_group as $cat)
                    @foreach($cat->services_group as $service)
                        <option value="{{$service->id_field}}" @if($item->service_id_field == $service->id_field) selected @endif>{{$service->serv_name_field}}</option>
                    @endforeach
                @endforeach
            </select>
        </div>
    </div>
</div>