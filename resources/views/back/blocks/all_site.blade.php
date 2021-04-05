@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Для всего сайта'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Копирайт</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="copyright"
                          data-type="string"
                          data-block="all_site"
                          data-id="0">{{$block->copyright_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Адрес</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="address"
                          data-type="string"
                          data-block="all_site"
                          data-id="0">{{$block->address_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Ссылка на карту проезда</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->map_link_field}}"
                       data-name="map_link"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер телефона</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->phone_field}}"
                       data-name="phone"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер телефона 2</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->phone_2_field}}"
                       data-name="phone_2"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Номер WhatsApp</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->whatsapp_field}}"
                       data-name="whatsapp"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на App Store</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->app_store_field}}"
                       data-name="app_store"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на Google play</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->google_play_field}}"
                       data-name="google_play"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на Instagram</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->inst_field}}"
                       data-name="inst"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на Facebook</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->fb_field}}"
                       data-name="fb"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
            <div class="form-group">
                <label>Ссылка на YouTube</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->youtube_field}}"
                       data-name="youtube"
                       data-type="string"
                       data-block="all_site"
                       data-id="0">
            </div>
        </div>
    </div>
@endsection