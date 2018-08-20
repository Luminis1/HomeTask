@extends('layouts.admin')

@section('AdminContentTables')

    <div class="row">
        <div class="col col-md-6">
            <h6>Add table</h6>
        </div>
        <div class="col col-md-6">
            <h6>Remove table</h6>
        </div>
    </div>
    <div class="row mb-3 pb-3 border-bottom">
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-10">
                    <input type="text" name="name" class="table-add-name form-control">
                </div>
                <div class="col-md-2">
                    <input type="submit" value="Add table" class="add-table btn btn-success">
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="row">
                <div class="col-md-8">
                    <select class="tables-list form-control">
                        @foreach($tables as $k => $v)
                            <option data-id="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Remove table" class="remove-table btn btn-danger float-right">
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <h6>Add attribute to table</h6>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <div class="row mb-3">
                <div class="col-md-6">
                    <select class="tables-add-attr-list form-control">
                        @foreach($tables as $k => $v)
                            <option data-id="{{$v->id}}">{{$v->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-md-6">
                    <select class="type-of-element form-control">
                        <option data-etype="select">select</option>
                        <option data-etype="checkbox">checkbox</option>
                        <option data-etype="radio">radio</option>
                        <option data-etype="input">input</option>
                        <option data-etype="textarea">textarea</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Name</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" class="attribute-add-name form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Is required</label>
                </div>
                <div class="col-md-6">
                    <input type="checkbox" name="name" class="attribute-required form-control" value="1">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Help</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" class="attribute-add-help form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label>Slug</label>
                </div>
                <div class="col-md-6">
                    <input type="text" name="name" class="attribute-add-slug form-control">
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <input type="submit" value="Add table" class="add-attribute btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    @endsection