@extends('layouts.treat')
@section('treatContent')
    {{--Рисуем таблицы--}}
    <div class="Polaris-Layout">
        <div class="Polaris-Layout__Section">
            <form id="general_form" method="post" action="/object" enctype='multipart/form-data'>
                @foreach($tables as $k => $v)
                    @if($v->name == 'Accommodation')
                        @include('admin.accomodation')
                        @else
                        {{--@if($v->name == 'Price / Availability')--}}
                            {{--@include('admin.price')--}}
                            {{--@else--}}
                            @if($v->name == 'Program')
                               @include('admin.program')
                               @else
                                   <div class="content-inner table-{{$v->id}}" data-tab-content="{{$v->name}}">
                                       <h2 class="page_title Polaris-DisplayText Polaris-DisplayText--sizeLarge">
                                           {{$v->name}}
                                       </h2>
                                       <div class="form-with-help">
                                           <div class="form-content">
                                               <div class="Polaris-Card">
                                                   <div class="Polaris-Card__Section">
                                                       <div class="Polaris-FormLayout">
                                                           <div class="Polaris-FormLayout__Item">
                                                               {{--Рисуем блоки--}}
                                                               @foreach($refTypes as $a => $b)
                                                                   <div class="form-block__container{{ ($b->element_type == "select") ? ' half-size' : ''}}">
                                                                   @if($b->table_type == $v->id)
                                                                       <div class="Polaris-Labelled__LabelWrapper">
                                                                           <div class="Polaris-Label">
                                                                               <label for="form_item_{{$b->id}}" class="Polaris-Label__Text">
                                                                                   {{$b->type}}
                                                                               </label>
                                                                           </div>
                                                                       </div>
                                                                       @if($b->required == 0)
                                                                               @if($b->element_type == "textarea")
                                                                                   <div class="Polaris-TextField Polaris-TextField--multiline">
                                                                               <textarea name="{{$b->type}}"
                                                                                         id="form_item_{{$b->id}}"
                                                                                         placeholder="{{$b->slug}}"
                                                                                         data-help-text="{{$b->help}}"
                                                                                         class="Polaris-TextField__Input"></textarea>
                                                                                       <div class="Polaris-TextField__Backdrop"></div>
                                                                                       <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                                                           <div class="Polaris-TextField__DummyInput">Website, ads, email, etc.<br></div>
                                                                                           <div class="Polaris-TextField__DummyInput"><br></div>
                                                                                       </div>
                                                                                   </div>
                                                                               @endif
                                                                                   @if($b->element_type == "input")
                                                                                       <div class="Polaris-TextField">
                                                                                           <input name="{{$b->type}}"
                                                                                                  id="form_item_{{$b->id}}"
                                                                                                  class="Polaris-TextField__Input"
                                                                                                  placeholder="{{$b->slug}}"
                                                                                                  data-help-text="{{$b->help}}">
                                                                                           <div class="Polaris-TextField__Backdrop"></div>
                                                                                       </div>
                                                                                   @endif
                                                                           @else
                                                                               @if($b->element_type == "textarea")
                                                                                   <div class="Polaris-TextField Polaris-TextField--multiline">
                                                                                       <textarea name="{{$b->type}}"
                                                                                                 id="form_item_{{$b->id}}"
                                                                                                 placeholder="{{$b->slug}}"
                                                                                                 data-help-text="{{$b->help}}"
                                                                                                 class="Polaris-TextField__Input" required>
                                                                                       </textarea>
                                                                                       <div class="Polaris-TextField__Backdrop"></div>
                                                                                       <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                                                                           <div class="Polaris-TextField__DummyInput">Website, ads, email, etc.<br></div>
                                                                                           <div class="Polaris-TextField__DummyInput"><br></div>
                                                                                       </div>
                                                                                   </div>
                                                                               @endif
                                                                                   @if($b->element_type == "input")
                                                                                       <div class="Polaris-TextField">
                                                                                           <input name="{{$b->type}}"
                                                                                                  id="form_item_{{$b->id}}"
                                                                                                  class="Polaris-TextField__Input"
                                                                                                  placeholder="{{$b->slug}}"
                                                                                                  data-help-text="{{$b->help}}"
                                                                                                  required>
                                                                                           <div class="Polaris-TextField__Backdrop"></div>
                                                                                       </div>
                                                                                   @endif
                                                                           @endif
                                                                       @if($b->element_type == "checkbox")
                                                                           <div class="check">
                                                                           @foreach($attributes as $m => $n)
                                                                               @if( $n->type == $b->type)
                                                                                   <div class="Polaris-FormLayout__Item">
                                                                                       <fieldset class="Polaris-ChoiceList">
                                                                                           <ul class="Polaris-ChoiceList__Choices">
                                                                                               <li>
                                                                                                   <label class="Polaris-Choice" for="form_item_{{$n->id}}_{{$m}}">
                                                                                                       <div class="Polaris-Choice__Control">
                                                                                                           <div class="Polaris-Checkbox">
                                                                                                               <input  type="checkbox" id="form_item_{{$n->id}}_{{$m}}"
                                                                                                                       class="Polaris-Checkbox__Input"
                                                                                                                       aria-invalid="false" value="{{$n->name}}"
                                                                                                                       name="{{$b->type}}[]">
                                                                                                               <div class="Polaris-Checkbox__Backdrop"></div>
                                                                                                               <div class="Polaris-Checkbox__Icon">
                                                                                                                   <span class="Polaris-Icon">
                                                                                                                       <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20">
                                                                                                                       <g fill-rule="evenodd">
                                                                                                                       <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                                       <path d="M8.315 13.859l-3.182-3.417a.506.506 0 0 1 0-.684l.643-.683a.437.437 0 0 1 .642 0l2.22 2.393 4.942-5.327a.437.437 0 0 1 .643 0l.643.684a.504.504 0 0 1 0 .683l-5.91 6.35a.437.437 0 0 1-.642 0"></path>
                                                                                                                       </g>
                                                                                                                       </svg>
                                                                                                                   </span>
                                                                                                               </div>
                                                                                                           </div>
                                                                                                       </div>
                                                                                                       <div class="Polaris-Choice__Label">
                                                                                                           {{$n->name}}
                                                                                                       </div>
                                                                                                   </label>
                                                                                               </li>
                                                                                           </ul>
                                                                                       </fieldset>
                                                                                   </div>
                                                                               @endif
                                                                           @endforeach
                                                                           </div>
                                                                       @endif
                                                                       @if($b->element_type == "radio")
                                                                           @foreach($attributes as $m => $n)
                                                                               @if( $n->type == $b->type)
                                                                                   <div class="Polaris-Stack__Item">
                                                                                       <div>
                                                                                           <label class="Polaris-Choice" for="form_item_{{$n->id}}_{{$m}}">
                                                                                               <span class="Polaris-Choice__Control">
                                                                                                   <span class="Polaris-RadioButton">
                                                                                                       <input name="{{$b->type}}"
                                                                                                           id="form_item_{{$n->id}}_{{$m}}"
                                                                                                           class="Polaris-RadioButton__Input"
                                                                                                           aria-describedby=""
                                                                                                           value="{{$n->name}}"
                                                                                                           type="radio">
                                                                                                       <span class="Polaris-RadioButton__Backdrop"></span>
                                                                                                       <span class="Polaris-RadioButton__Icon"></span>
                                                                                                   </span>
                                                                                               </span>
                                                                                               <span class="Polaris-Choice__Label">{{$n->name}}</span>
                                                                                           </label>
                                                                                       </div>
                                                                                   </div>
                                                                               @endif
                                                                           @endforeach
                                                                       @endif
                                                                           @if($b->element_type == "select")
                                                                               <div class="Polaris-Select">
                                                                                   <select name="{{$b->type}}"
                                                                                           id="form_item_{{$b->id}}"
                                                                                           class="Polaris-Select__Input"
                                                                                           data-help-text="{{$b->help}}">
                                                                                       @foreach($attributes as $m => $n)
                                                                                           Polaris-Select               @if($n->type == $b->type)
                                                                                               <option data-val="{{$n->name}}" >{{$n->name}}</option>
                                                                                           @endif
                                                                                       @endforeach
                                                                                   </select>
                                                                                   <div class="Polaris-Select__Icon">
                                                                              <span class="Polaris-Icon">
                                                                                  <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg>
                                                                              </span>
                                                                                   </div>
                                                                                   <div class="Polaris-Select__Backdrop"></div>
                                                                               </div>
                                                                           @endif
                                                                   @endif
                                                                   </div>
                                                               @endforeach
                                                           </div>
                                                       </div>
                                                   </div>
                                               </div>
                                           </div>
                                       </div>
                                       @include('admin.partials._nav_buttons', ['table' => $v])
                                   </div>
                               @endif
                           {{--@endif--}}
                       @endif
                   @endforeach
                {{csrf_field()}}
            </form>
        </div>
        <div class="form-help-wraper Polaris-Layout__Section Polaris-Layout__Section--secondary">
            <div id="form-help" class="Polaris-Card">
                <div class="Polaris-Card__Header">
                    <h2 class="Polaris-Heading">Help</h2>
                </div>
                <div class="Polaris-Card__Section">
                    <p>
                        <span class="placeholder">We can help you...</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modal')
    @include('admin.partials._add_room_modal')
    @include('admin.partials._select_amenities_modal')
@endsection
