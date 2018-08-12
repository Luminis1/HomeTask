@extends('layouts.admin')

@section('AdminContent')
   <div>
    <div class="language-block">
        <h6>Add new language</h6>
        <br>
        <input type="text" name="name" class="language-name">
        <input type="submit" value="Add new" class="language-submitt">

    </div>
    <br>
    <h6>Remove language</h6>
    <br>
    <select class="language-list">
        @foreach($languages as $k => $v)
            <option data-id="{{$v['id']}}">{{ $v['name'] }} </option>
        @endforeach
    </select>
    <input type="submit" value="remove" class="language-remove">
   </div>

   <br>
   <br>

   <div class="country-block">
       <div>
           <h6>Add new Country</h6>
           <br>
           <input type="text" name="name" class="country-name">
           <input type="submit" value="Add new" class="country-submitt">

       </div>
       <br>
       <h6>Remove country</h6>
       <br>
       <select class="country-list">
           @foreach($country as $k => $v)
               <option data-id="{{$v['id']}}">{{ $v['countryName'] }} </option>
           @endforeach
       </select>
       <input type="submit" value="remove" class="country-remove">
   </div>

   <br>
   <br>

   <div class="treat-block">
       <div>
           <h6>Add new treat</h6>
           <br>
           <input type="text" name="name" class="treat-name">
           <input type="submit" value="Add new" class="treat-submitt">

       </div>
       <br>
       <h6>Remove treat</h6>
       <br>
       <select class="treat-list">
           @foreach($treat as $k => $v)
               <option data-id="{{$v['id']}}">{{ $v['name'] }} </option>
           @endforeach
       </select>
       <input type="submit" value="remove" class="treat-remove">
   </div>
    @endsection