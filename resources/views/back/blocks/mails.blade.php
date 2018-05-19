@extends('back.layout')
@section('content')

    @include('back.content-top', ['title' => 'Почта'])

    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title"> Получатель писем </h3>
        </div>
        <div class="box-body">

            <div class="form-group">
                <label>Адрес почты</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$block->to_field}}"
                       data-name="to"
                       data-type="string"
                       data-block="feedback"
                       data-id="0">
            </div>
        </div>
    </div>

@endsection