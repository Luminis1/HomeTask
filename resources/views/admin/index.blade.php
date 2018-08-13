@extends('layouts.admin')

@section('AdminContent')

    @foreach($basicsViewParams as $k => $v)

        <div class="{{$v->type}}">
            <h6>Add new {{$v->type}}</h6>
            <br>
            <input type="text" name="name" class="name-{{$v->id}}" data-type="{{$v->id}}" data-table="{{$table_id}}">
            <input type="submit" value="Add new" class="submit" data-class="{{$v->id}}">
        </div>
        <br>
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
        </div>
        <br>

    @endforeach

    @endsection