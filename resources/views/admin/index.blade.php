@extends('layouts.admin')

@section('AdminContent')

    @foreach($basicsViewParams as $k => $v)
        <div class="row mb-3 pb-3 border-bottom">
            <div class="col-md-4">
                @if($v->element_type == "select" || $v->element_type == "checkbox" || $v->element_type == "radio")
                    <h6>This is {{$v->element_type}} and has {{$v->type}} name</h6>
                    <br>
                    <div class="{{$v->type}}">
                        <h6>Add new {{$v->type}}</h6>
                        <div class="row mb-3">
                            <div class="col-md-8">
                                <input type="text" name="name" class="name-{{$v->id}} form-control" data-type="{{$v->id}}" data-table="{{$table_id}}">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Add new" class="submit btn btn-primary" data-class="{{$v->id}}">
                            </div>
                        </div>
                        <h6>Set new help below</h6>
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="help" value="{{$v->help}}" class="help-{{$v->id}} form-control">
                            </div>
                            <div class="col-md-4">
                                <input type="button" class="set-help btn btn-primary" value="set-help" data-help="{{$v->id}}">
                            </div>
                        </div>
                    </div>
                @else
                    <h6>This is {{$v->element_type}} and has {{$v->type}} name</h6>
                    <h6>Set new help below</h6>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <input type="text" name="help" value="{{$v->help}}" class="help-{{$v->id}} form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="button" class="set-help btn btn-primary" value="set-help" data-help="{{$v->id}}">
                        </div>
                    </div>
                    <h6>Set placeholder help below</h6>
                    <div class="row">
                        <div class="col-md-8">
                            <input type="text" name="slug" value="{{$v->slug}}" class="slug-{{$v->id}} form-control">
                        </div>
                        <div class="col-md-4">
                            <input type="button" class="set-slug btn btn-primary" value="set-slug" data-slug="{{$v->id}}">
                        </div>
                    </div>
                @endif
            </div>
            <div class="col-md-4">
                @if($v->element_type == "select" || $v->element_type == "checkbox" || $v->element_type == "radio")
                    <div class="{{$v->type}}">
                        <h6>Remove {{$v->type}}</h6>
                        <br>
                        <div class="row">
                            <div class="col-md-8">
                                <select class="list-{{$v->id}} form-control">
                                    @foreach($attributes as $a => $b)
                                        @if($v->id == $b->type_id)
                                            <option data-id="{{$b['id']}}">{{ $b['name'] }} </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="remove" class="remove btn btn-danger" data-class="{{$v->id}}">
                            </div>
                        </div>
                        @else
                        @endif
                    </div>
            </div>
        </div>

    @endforeach

    @endsection