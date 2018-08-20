@extends('layouts.admin')

@section('AdminContent')

    @foreach($basicsViewParams as $k => $v)
        @if($v->element_type == "select" || $v->element_type == "checkbox" || $v->element_type == "radio")
            <h6>This is {{$v->element_type}} and has {{$v->type}} name</h6>
            <br>
        <div class="{{$v->type}}">
            <h6>Add new {{$v->type}}</h6>
            <br>
            <input type="text" name="name" class="name-{{$v->id}}" data-type="{{$v->id}}" data-table="{{$table_id}}">
            <input type="submit" value="Add new" class="submit" data-class="{{$v->id}}">
            <br>
            <br>
            <h6>Set new help below</h6><br>
            <input type="text" name="help" value="{{$v->help}}" class="help-{{$v->id}}">
            <input type="button" class="set-help" value="set-help" data-help="{{$v->id}}">
        </div>
        @else
            <h6>This is {{$v->element_type}} and has {{$v->type}} name</h6><br>
            <h6>Set new help below</h6><br>
            <input type="text" name="help" value="{{$v->help}}" class="help-{{$v->id}}">
            <input type="button" class="set-help" value="set-help" data-help="{{$v->id}}">
            <br>
            <br>
            <h6>Set placeholder help below</h6><br>
            <input type="text" name="slug" value="{{$v->slug}}" class="slug-{{$v->id}}">
            <input type="button" class="set-slug" value="set-slug" data-slug="{{$v->id}}">
            @endif
        <br>
        @if($v->element_type == "select" || $v->element_type == "checkbox" || $v->element_type == "radio")
        <div class="{{$v->type}}">
        <h6>Remove {{$v->type}}</h6>
        <br>

        <select class="list-{{$v->id}}">
            @foreach($attributes as $a => $b)
                @if($v->id == $b->type_id)
                <option data-id="{{$b['id']}}">{{ $b['name'] }} </option>
                @endif
            @endforeach
        </select>

        <input type="submit" value="remove" class="remove" data-class="{{$v->id}}">
            @else
                @endif
        </div>
        <br>

    @endforeach

    @endsection