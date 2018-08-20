<div class="content-inner accomodation-table table-{{$v->id}}" data-tab-content="{{$v->name}}">
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
                                <div class="form-block__container">
                                @if($b->table_type == $v->id)
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="form_item_{{$b->id}}" class="Polaris-Label__Text">
                                                {{$b->type}}
                                            </label>
                                        </div>
                                    </div>
                                    @if($b->element_type == "select")
                                        <div class="Polaris-Select">
                                            <select name="{{$b->type}}"
                                                    id="form_item_{{$b->id}}"
                                                    data-help-text="{{$b->help}}"
                                                    class="Polaris-Select__Input">
                                                @foreach($attributes as $m => $n)
                                                    @if($n->type == $b->type)
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
                                    @if($b->element_type == "input")
                                        <div class="Polaris-TextField">
                                            <input name="{{$b->type}}" id="form_item_{{$b->id}}"
                                                   id="form_item_{{$b->id}}"
                                                   class="Polaris-TextField__Input"
                                                   placeholder="{{$b->slug}}"
                                                   data-help-text="{{$b->help}}">
                                            <div class="Polaris-TextField__Backdrop"></div>
                                        </div>
                                    @endif
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
                                    @if($b->element_type == "checkbox")
                                        @foreach($attributes as $m => $n)
                                            @if( $n->type == $b->type)
                                                <div class="Polaris-FormLayout__Item">
                                                    <fieldset class="Polaris-ChoiceList">
                                                        <ul class="Polaris-ChoiceList__Choices">
                                                            <li>
                                                                <label class="Polaris-Choice" for="form_item_{{$n->id}}_{{$m}}">
                                                                    <div class="Polaris-Choice__Control">
                                                                        <div class="Polaris-Checkbox">
                                                                            <input  type="checkbox"
                                                                                    id="form_item_{{$n->id}}_{{$m}}"
                                                                                    class="Polaris-Checkbox__Input"
                                                                                    data-help-text="{{$b->help}}"
                                                                                    value="{{$n->name}}"
                                                                                    name="{{$b->type}}[]"
                                                                            >
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
                                                                        data-help-text="{{$b->help}}"
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
                                @endif
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-with-help">
        <div class="form-content">
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="accomodation_type_select" class="Polaris-Label__Text">
                                        Accomodation Type
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-Select">
                                <select name="{{$b->type}}"
                                        id="accomodation_type_select"
                                        class="Polaris-Select__Input"
                                        data-help-support="true"
                                        data-help-title="Help"
                                        data-help-text="Select type of retreat">
                                    <option data-val="Hotel" >Hotel</option>
                                    <option data-val="Hotel" >Guest House</option>
                                    <option data-val="Hotel" >Lodge</option>
                                    <option data-val="Hotel" >Resort</option>
                                </select>
                                <div class="Polaris-Select__Icon">
                                    <span class="Polaris-Icon">
                                        <svg class="Polaris-Icon__Svg" viewBox="0 0 20 20" focusable="false" aria-hidden="true"><path d="M13 8l-3-3-3 3h6zm-.1 4L10 14.9 7.1 12h5.8z" fill-rule="evenodd"></path></svg>
                                    </span>
                                </div>
                                <div class="Polaris-Select__Backdrop"></div>
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="hotel_name_input" class="Polaris-Label__Text">
                                        Hotel name
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="Hotel name" id="hotel_name_input"
                                       class="Polaris-TextField__Input"
                                       placeholder="ex: Four Seasons">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="hotel_short_description_textarea" class="Polaris-Label__Text">
                                        Hotel short description
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField Polaris-TextField--multiline">
                                <textarea name="Hotel short description"
                                        id="hotel_short_description_textarea"
                                        placeholder="Website, ads, email, etc."
                                        class="Polaris-TextField__Input">
                                </textarea>
                                <div class="Polaris-TextField__Backdrop"></div>
                                <div aria-hidden="true" class="Polaris-TextField__Resizer">
                                    <div class="Polaris-TextField__DummyInput">Website, ads, email, etc.<br></div>
                                    <div class="Polaris-TextField__DummyInput"><br></div>
                                </div>
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Label" style="margin-bottom: 5px;">
                                <label for="accomodation_images_input" class="Polaris-Label__Text">
                                    Accomodation Images
                                </label>
                            </div>
                            <div class="Polaris-TextField Polaris-TextField--multiline">
                                <input name="Accomodation Images"
                                        id="accomodation_images_input"
                                        type="file">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-with-help">
        <div class="form-content">
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <h3 class="Polaris-Heading">
                                AMENITIES
                            </h3>
                            <span class="block-desc Polaris-TextStyle--variationSubdued">
                                Every space is unique. Highlight what makes this place welcoming
                            </span>
                            <button type="button" class="Polaris-Button">
                                <span class="Polaris-Button__Content">
                                    <span>Select amenities</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-with-help">
        <div class="form-content">
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <h3 class="Polaris-Heading">
                                AVAILABLE ROOMS
                            </h3>
                            <span class="block-desc Polaris-TextStyle--variationSubdued">
                                If it is a shared accommodation, add the room type
                            </span>
                            <button type="button" class="Polaris-Button">
                                <span class="Polaris-Button__Content">
                                    <span>Add rooms</span>
                                </span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials._nav_buttons', ['table' => $v])
</div>
