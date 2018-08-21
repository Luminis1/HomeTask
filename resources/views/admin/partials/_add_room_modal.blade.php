<div id="add_room_modal" class="modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Add room</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="main-form">
                    <div class="left">
                        <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                                <div class="Polaris-Labelled__LabelWrapper">
                                    <div class="Polaris-Label">
                                        <label for="select_amenities__room_name__input" class="Polaris-Label__Text">
                                            Room name
                                        </label>
                                    </div>
                                </div>
                                <div class="Polaris-TextField">
                                    <input name="select_amenities__room_name"
                                           id="select_amenities__room_name__input"
                                           class="Polaris-TextField__Input"
                                           placeholder="Ocean view"
                                           data-help-text="">
                                    <div class="Polaris-TextField__Backdrop"></div>
                                </div>
                            </div>
                            <div class="Polaris-FormLayout__Item">
                                <div class="Polaris-Labelled__LabelWrapper">
                                    <div class="Polaris-Label">
                                        <label for="select_amenities__images__input" class="Polaris-Label__Text">
                                            Images
                                        </label>
                                    </div>
                                </div>
                                <div class="Polaris-TextField Polaris-TextField--multiline">
                                    <input name="select_amenities__images" id="select_amenities__images__input" type="file">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="right">
                        <div class="Polaris-FormLayout">
                            <div class="Polaris-FormLayout__Item">
                                <div class="Polaris-Labelled__LabelWrapper">
                                    <div class="Polaris-Label">
                                        <label for="select_amenities__people_in_room__select" class="Polaris-Label__Text">
                                            People in room
                                        </label>
                                    </div>
                                </div>
                                <div class="Polaris-Select">
                                    <select name="select_amenities__people_in_room" id="select_amenities__people_in_room__select" class="Polaris-Select__Input" data-help-text="">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
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
                                    <div class="Polaris-Labelled__LabelWrapper">
                                        <div class="Polaris-Label">
                                            <label for="" class="Polaris-Label__Text">
                                                Bed configuration
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <ul class="Polaris-ChoiceList__Choices">
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__single">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__single" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="single">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                Single
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__double">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__double" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="double">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                Double
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__twin">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__twin" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="twin">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                Twin
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__queen">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__queen" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="queen">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                Queen
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__king">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__king" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="king">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                King
                                            </span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="Polaris-Choice" for="select_amenities_bed_config__dorm">
                                            <span class="Polaris-Choice__Control">
                                                <span class="Polaris-RadioButton">
                                                    <input id="select_amenities_bed_config__dorm" name="select_amenities__bed_config" type="radio" class="Polaris-RadioButton__Input" value="dorm">
                                                    <span class="Polaris-RadioButton__Backdrop"></span>
                                                    <span class="Polaris-RadioButton__Icon"></span>
                                                </span>
                                            </span>
                                            <span class="Polaris-Choice__Label">
                                                Dorm
                                            </span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <div class="left">
                    <button type="button" class="Polaris-Button">
                        <span class="Polaris-Button__Content">
                            <span>Delete</span>
                        </span>
                    </button>
                </div>
                <div class="right">
                    <button type="button" class="Polaris-Button" data-dismiss="modal">
                        <span class="Polaris-Button__Content">
                            <span>Cancel</span>
                        </span>
                    </button>
                    <button type="button" class="Polaris-Button Polaris-Button--primary">
                        <span class="Polaris-Button__Content">
                            <span>Save</span>
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>