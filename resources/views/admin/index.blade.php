@extends('layouts.admin')

@section('AdminContent')

    @foreach($basicsViewParams as $k => $v)

        <div class="{{$v->type}}">
            <h6>Add new {{$v->type}}</h6>
            <br>
            <input type="text" name="name" class="{{$v->type}}-name" data-type="{{$v->id}}" data-table="{{$table_id}}">
            <input type="submit" value="Add new" class="submit" data-class="{{$v->type}}">
        </div>
        <br>
        <div class="{{$v->type}}">
        <h6>Remove {{$v->type}}</h6>
        <br>
        <select class="{{$v->type}}-list">
            @foreach($attributes as $a => $b)
                @if($v->id == $b->type_id)
                <option data-id="{{$v['id']}}">{{ $b['name'] }} </option>
                @endif
            @endforeach
        </select>
        <input type="submit" value="remove" class="remove" data-class="{{$v->type}}">
        </div>
        <br>

    @endforeach

    @endsection