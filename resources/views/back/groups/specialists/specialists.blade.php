@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Специалист'])
    <div class="nav-tabs-custom">
        <ul class="nav nav-tabs">
            <li class="active"><a href="#tab_g1" data-toggle="tab" aria-expanded="true">Контент</a></li>
            <li><a href="#tab_g2" data-toggle="tab" aria-expanded="false">Метаданные</a></li>
        </ul>

        <div class="tab-content">
            <div class="tab-pane active" id="tab_g1">
                <div class="box-body">
                    <div class="form-group">
                        <label>Вид ссылки в адресной строке</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->slug_field}}"
                               data-name="slug"
                               data-type="string"
                               data-block="specialists"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Имя</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->spec_name_field}}"
                               data-name="spec_name"
                               data-type="string"
                               data-block="specialists"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Должность</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->profession_field}}"
                               data-name="profession"
                               data-type="string"
                               data-block="specialists"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>О специалисте</label>
                        <textarea class="form-control text-editor"
                                  data-name="about"
                                  data-type="string"
                                  data-block="specialists"
                                  data-id="{{$item->id_field}}">{{$item->about_field}}</textarea>
                    </div>
                </div>

                <div class="box box-info group-item-widget" data-block="spec_sertificates">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Сертификаты </h3>
                        <button type="submit" data-parent="{{$item->id_field}}" class="btn btn-primary pull-right add-flat-item">Добавить</button>
                    </div>
                    <div class="box-body">
                        <div class="groupflat-widget group-item-wrap">
                            @foreach($item->spec_sertificates_group as $sert_item)
                                @include('back.groups.spec_sertificates.spec_sertificates_box', ['item' => $sert_item])
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>


            <div class="tab-pane" id="tab_g2">
                <div class="box-body">
                    <div class="form-group">
                        <label>Тайтл</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_title_field}}"
                               data-name="seo_title"
                               data-type="seo"
                               data-block="specialists"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Ключевые слова (keywords)</label>
                        <input class="form-control string"
                               type="text" placeholder=""
                               value="{{$item->seo_keywords_field}}"
                               data-name="seo_keywords"
                               data-type="seo"
                               data-block="specialists"
                               data-id="{{$item->id_field}}">
                    </div>
                    <div class="form-group">
                        <label>Описание страницы (description)</label>
                        <textarea class="form-control text"
                                  data-name="seo_description"
                                  data-type="seo"
                                  data-block="specialists"
                                  data-id="{{$item->id_field}}">{{$item->seo_description_field}}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection