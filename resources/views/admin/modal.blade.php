@extends('layouts.admin')

@section('modal')

    <div class="row mb-3 pb-3 border-bottom">
        <div class="col-md-4">
            <h6>Add new Accomodation</h6>
            <div class="row mb-3">
                <div class="col-md-8">
                    <input type="text" name="name" class="name-modal form-control">
                </div>
                <div class="col-md-4">
                    <input type="submit" value="Add new" class="submit-modal btn btn-primary">
                </div>
            </div>
        </div>
    </div>
    <div class="row mb-3 pb-3 border-bottom">
    <div class="col-md-4">
        <h6>Remove Accomodation</h6>
        <br>
        <div class="row">
            <div class="col-md-8">
                <select class="list form-control modal-list">
                    @foreach($modals as $a => $b)
                            <option data-id="{{$b['id']}}">{{ $b['label'] }} </option>
                    @endforeach
                </select>
            </div>
            <div class="col-md-4">
                <input type="submit" value="remove" class="remove-modal btn btn-danger">
            </div>
        </div>
    </div>
    </div>

    @endsection