<div id="select_amenities_modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Select Amenities</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="select_amenities_form">
                    <div class="Polaris-Labelled__LabelWrapper">
                        <div class="Polaris-Labelled__LabelWrapper">
                            <div class="Polaris-Label">
                                <label for="" class="Polaris-Label__Text">
                                    Sport Activities (optional)
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="amenities-list">
                        @foreach($modal as $k => $v)
                        <div class="checkbox-wrap">
                            <label class="Polaris-Choice" for="amenities_list__essentials__checkbox_{{$v->id}}">
                                <div class="Polaris-Choice__Control">
                                    <div class="Polaris-Checkbox">
                                        <input name="amenities_list[]" type="checkbox" id="amenities_list__essentials__checkbox_{{$v->id}}" class="Polaris-Checkbox__Input" value="{{$v->label}}">
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
                                    {{$v->label}}
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="Polaris-Button" data-dismiss="modal">
                    <span class="Polaris-Button__Content">
                        <span>Cancel</span>
                    </span>
                </button>
                <button id="select_amenities_form_submit" type="button" class="Polaris-Button Polaris-Button--primary">
                    <span class="Polaris-Button__Content">
                        <span>Save</span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>
