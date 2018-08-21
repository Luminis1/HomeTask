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
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="retreat_center_address" class="Polaris-Label__Text">
                                        Address of the retreat center
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="retreat_center_address" id="retreat_center_address_input" class="Polaris-TextField__Input" placeholder="ex: 123 West ave" data-help-text="">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="airport_arrival_input" class="Polaris-Label__Text">
                                        Airport arrival
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="airport_arrival" id="airport_arrival_input" class="Polaris-TextField__Input" placeholder="ex: Los Angeles Internation Airport (LAX)" data-help-text="">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label for="" class="Polaris-Label__Text">
                                        Transfer from airport
                                    </label>
                                </div>
                            </div>
                            <ul class="Polaris-ChoiceList__Choices">
                                <li>
                                    <label class="Polaris-Choice" for="airport_transfer__free__radio">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="airport_transfer__free__radio" name="airport_transfer" type="radio" class="Polaris-RadioButton__Input" value="free">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            We will pick up the guests from this airport free of charge
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="airport_transfer__additional_costs__radio">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="airport_transfer__additional_costs__radio" name="airport_transfer" type="radio" class="Polaris-RadioButton__Input" value="additional_costs">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            We can pick up the guests at additional costs from this airport
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="airport_transfer__own_transport__radio">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="airport_transfer__own_transport__radio" name="airport_transfer" type="radio" class="Polaris-RadioButton__Input" value="own_transport">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            The guests have to arrange their own transport
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="accomodations_form_parts">
        <div class="form-with-help accomodations_form_item">
            <input class="accomodation_amenities_data" type="hidden" name="" value="">
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
                                    <select name=""
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
                                    <input name=""
                                           id="hotel_name_input"
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
                                    <textarea name=""
                                            id="hotel_short_description_textarea"
                                            placeholder="Describe the diet and the meal plan for this retreat"
                                            class="Polaris-TextField__Input"></textarea>
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
                                    <input name=""
                                            id="accomodation_images_input"
                                            type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                                <h3 class="Polaris-Heading">
                                    AMENITIES
                                </h3>
                                <span class="accomodation-amenities-list Polaris-TextStyle--variationSubdued">
                                    <span class="placeholder">Every space is unique. Highlight what makes this place welcoming</span>
                                    <span class="items"></span>
                                </span>
                                <button type="button" class="Polaris-Button" data-toggle="modal" data-target="#select_amenities_modal">
                                    <span class="Polaris-Button__Content">
                                        <span>Select amenities</span>
                                    </span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                                <h3 class="Polaris-Heading">
                                    AVAILABLE ROOMS
                                </h3>
                                <span class="accomodation-rooms-table-placeholder Polaris-TextStyle--variationSubdued">
                                    If it is a shared accommodation, add the room type
                                </span>
                                <div class="accomodation-rooms-table-wrap">
                                    <table id="accomodation_rooms_table">
                                        <tbody>
                                            <tr>
                                                <td class="preview">
                                                    <div class="preview-wrap">
                                                        <img src="https://picsum.photos/85/85" alt="Room name" title="Room name">
                                                        <a href="#" class="Polaris-Link" data-toggle="modal" data-target="#add_room_modal">Room name</a>
                                                    </div>
                                                </td>
                                                <td class="bed-configuration">
                                                    Queen Bed
                                                </td>
                                                <td class="people-in-room">
                                                    Private
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="preview">
                                                    <div class="preview-wrap">
                                                        <img src="https://picsum.photos/110/110" alt="Room name" title="Room name">
                                                        <a href="#" class="Polaris-Link" data-toggle="modal" data-target="#add_room_modal">Room name</a>
                                                    </div>
                                                </td>
                                                <td class="bed-configuration">
                                                    Twin Bed
                                                </td>
                                                <td class="people-in-room">
                                                    Shared with 2 other people
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="preview">
                                                    <div class="preview-wrap">
                                                        <img src="https://picsum.photos/100/100" alt="Room name" title="Room name">
                                                        <a href="#" class="Polaris-Link" data-toggle="modal" data-target="#add_room_modal">Room name</a>
                                                    </div>
                                                </td>
                                                <td class="bed-configuration">
                                                    King Bed
                                                </td>
                                                <td class="people-in-room">
                                                    Shared with 3 other people
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <button type="button" class="Polaris-Button" data-toggle="modal" data-target="#add_room_modal">
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
    </div>
    <div class="form-with-help">
        <div class="form-content">
            <div class="Polaris-Card">
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <h3 class="Polaris-Heading">
                                Add accommodation
                            </h3>
                            <br>
                            <button type="button" class="Polaris-Button" id="add_accommodation_btn">
                                <span class="Polaris-Button__Content">
                                    <span>Add accommodation</span>
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
