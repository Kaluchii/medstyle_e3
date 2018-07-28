<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Причина {{$item->sorter_field}}</h3>
        <button type="submit" class="btn btn-primary pull-right remove-flat-item" data-id="{{$item->id_field}}"
                data-block="problems">Удалить
        </button>
    </div>
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g{{$item->id_field}}_1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g{{$item->id_field}}_2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g{{$item->id_field}}_1">

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
            <div class="tab-pane" id="tab_g{{$item->id_field}}_2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="problems"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="problems"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="problems"
                                  data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>