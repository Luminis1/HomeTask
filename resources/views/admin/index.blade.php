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
                        <div class="row">
                            <div class="col-md-8">
                                <input type="text" name="name" class="name-{{$v->id}} form-control" data-type="{{$v->id}}" data-table="{{$table_id}}">
                            </div>
                            <div class="col-md-4">
                                <input type="submit" value="Add new" class="submit btn btn-primary" data-class="{{$v->id}}">
                            </div>
                        </div>
                    </div>
                @else
                    <h6>This is {{$v->element_type}} and has {{$v->type}} name</h6>
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