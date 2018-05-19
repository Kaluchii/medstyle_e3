@extends('back.layout')
@section('content')
    @include('back.content-top', ['title' => 'Вопрос'])
    <div class="box box-info">
        <div class="box-header with-border">
            <h3 class="box-title">Поля для редактирования данных</h3>
        </div>
        <div class="box-body">
            <div class="form-group">
                <label>Имя задающего вопрос</label>
                <input class="form-control string"
                       type="text" placeholder=""
                       value="{{$item->question_name_field}}"
                       data-name="question_name"
                       data-type="string"
                       data-block="questions"
                       data-id="{{$item->id_field}}">
            </div>
            <div class="form-group">
                <label>Вопрос</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="question_text"
                          data-type="string"
                          data-block="questions"
                          data-id="{{$item->id_field}}">{{$item->question_text_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Ответ</label>
                <textarea class="form-control text" data-reg="true"
                          data-name="answer_text"
                          data-type="string"
                          data-block="questions"
                          data-id="{{$item->id_field}}">{{$item->answer_text_field}}</textarea>
            </div>
            <div class="form-group">
                <label>Специалист</label>
                <select  class="form-control int"
                         data-name="spec_id"
                         data-block="questions"
                         data-id="{{$item->id_field}}">
                    @foreach($specialists->specialists_group as $spec)
                        <option value="{{$spec->id_field}}" @if($item->spec_id_field == $spec->id_field) selected @endif>{{$spec->spec_name_field}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label>Причина обращения</label>
                <select  class="form-control int"
                         data-name="problem_id"
                         data-block="questions"
                         data-id="{{$item->id_field}}">
                    @foreach($problems->problems_group as $problem)
                        <option value="{{$problem->id_field}}" @if($item->problem_id_field == $problem->id_field) selected @endif>{{$problem->problem_name_field}}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>
@endsection