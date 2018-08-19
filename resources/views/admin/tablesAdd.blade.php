@extends('layouts.admin')

@section('AdminContentTables')
    <div>
        <h6>Add table</h6>
        <br>
        <input type="text" name="name" class="table-add-name">
        <input type="submit" value="Add table" class="add-table">
    </div>
    <br>
    <br>
    <div>
        <h6>Remove table</h6>
        <br>
        <select class="tables-list">
            @foreach($tables as $k => $v)
                <option data-id="{{$v->id}}">{{$v->name}}</option>
            @endforeach
        </select>
        <input type="submit" value="Remove table" class="remove-table">
    </div>
    <br>
    <br>
    <div>
        <h6>Add attribute to table</h6>
        <br>
        <select class="tables-add-attr-list">
            @foreach($tables as $k => $v)
                <option data-id="{{$v->id}}">{{$v->name}}</option>
                @endforeach
        </select>
        <select class="type-of-element">
            <option data-etype="select">select</option>
            <option data-etype="checkbox">checkbox</option>
            <option data-etype="radio">radio</option>
            <option data-etype="input">input</option>
            <option data-etype="textarea">textarea</option>
        </select>
        <br>
        <br>
        <label>Name</label><br>
        <input type="text" name="name" class="attribute-add-name"><br>
        <label>Is required</label><br>
        <input type="checkbox" name="name" class="attribute-required" value="1"><br>
        <label>Help</label><br>
        <input type="text" name="name" class="attribute-add-help"><br>
        <label>Slug</label><br>
        <input type="text" name="name" class="attribute-add-slug"><br>
        <input type="submit" value="Add table" class="add-attribute">
    </div>
    @endsection