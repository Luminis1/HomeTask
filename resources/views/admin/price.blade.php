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
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Event Frequency
                                    </label>
                                </div>
                            </div>
                            <ul class="Polaris-ChoiceList__Choices">
                                <li>
                                    <label class="Polaris-Choice" for="event_frequency__once__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="event_frequency__once__input" name="date-type" type="radio" class="Polaris-RadioButton__Input" value="once">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            It's a one time retreat
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="event_frequency__multiple__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="event_frequency__multiple__input" name="date-type" type="radio" class="Polaris-RadioButton__Input" value="multiple">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            It has multiple starting dates
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="event_frequency__certain__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="event_frequency__certain__input" name="date-type" type="radio" class="Polaris-RadioButton__Input" value="certain">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            It's open for a certain period(s)
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="Polaris-Card__Section">
                    <div class="Polaris-FormLayout">
                        <div class="Polaris-FormLayout__Item">
                            <div class="once">
                                <div class="form-with-help">
                                    <div class="form-content">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Dates
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input type="date">
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Open slots
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                                       class="Polaris-TextField__Input"
                                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                                       data-help-support="true"
                                                       data-help-title="Help"
                                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>

                                        </div>
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Max. people in the group
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                                       class="Polaris-TextField__Input"
                                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                                       data-help-support="true"
                                                       data-help-title="Help"
                                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="multiple">
                                <div class="form-with-help">
                                    <div class="form-content">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Dates
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input type="date">
                                            </div>
                                        </div>
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Open slots
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                                       class="Polaris-TextField__Input"
                                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                                       data-help-support="true"
                                                       data-help-title="Help"
                                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>

                                        </div>
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        Max. people in the group
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="Polaris-TextField">
                                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                                       class="Polaris-TextField__Input"
                                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                                       data-help-support="true"
                                                       data-help-title="Help"
                                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                                <div class="Polaris-TextField__Backdrop"></div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="form-with-help">
                                    <div class="form-content">
                                        <div class="Polaris-FormLayout__Item">
                                            <div class="Polaris-Labelled__LabelWrapper">
                                                <div class="Polaris-Label">
                                                    <label class="Polaris-Label__Text">
                                                        ADD ANOTHER ARRIVAL DATE
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="button" class="Polaris-Button">
                                                <span class="Polaris-Button__Content">
                                                    <span>
                                                        Add another date
                                                    </span>
                                                </span>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="certain">
        <div class="form-with-help">
            <div class="form-content">
                <div class="Polaris-Card">
                    <div class="Polaris-Card__Section">
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Dates
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input type="date">
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Dates
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input type="date">
                            </div>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Open slots
                                    </label>
                                </div>
                            </div>
                            <ul class="Polaris-ChoiceList__Choices">
                                <li>
                                    <label class="Polaris-Choice" for="price_arrivals__daily__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="price_arrivals__daily__input" name="arrivals" type="radio" class="Polaris-RadioButton__Input" value="Daily">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            Daily
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="price_arrivals__weekly__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="price_arrivals__weekly__input" name="arrivals" type="radio" class="Polaris-RadioButton__Input" value="Weekly">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            Weekly
                                        </span>
                                    </label>
                                </li>
                                <li>
                                    <label class="Polaris-Choice" for="price_arrivals__monthly__input">
                                        <span class="Polaris-Choice__Control">
                                            <span class="Polaris-RadioButton">
                                                <input id="price_arrivals__monthly__input" name="arrivals" type="radio" class="Polaris-RadioButton__Input" value="Monthly">
                                                <span class="Polaris-RadioButton__Backdrop"></span>
                                                <span class="Polaris-RadioButton__Icon"></span>
                                            </span>
                                        </span>
                                        <span class="Polaris-Choice__Label">
                                            Monthly
                                        </span>
                                    </label>
                                </li>
                            </ul>
                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Max. people in the group
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                       class="Polaris-TextField__Input"
                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                       data-help-support="true"
                                       data-help-title="Help"
                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>

                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Max. people in the group
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                       class="Polaris-TextField__Input"
                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                       data-help-support="true"
                                       data-help-title="Help"
                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                <div class="Polaris-TextField__Backdrop"></div>
                            </div>

                        </div>
                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        Max. people in the group
                                    </label>
                                </div>
                            </div>
                            <div class="Polaris-TextField">
                                <input name="{{$b->type}}" id="unique_listing_title_input"
                                       class="Polaris-TextField__Input"
                                       placeholder="ex: Hatha Yoga and Ayrveda Retreat"
                                       data-help-support="true"
                                       data-help-title="Help"
                                       data-help-text="Add a catchy title. Include the length of the program and the main style (maximum 100 characters).">
                                <div class="Polaris-TextField__Backdrop"></div>
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

                        <div class="Polaris-FormLayout__Item">
                            <div class="Polaris-Labelled__LabelWrapper">
                                <div class="Polaris-Label">
                                    <label class="Polaris-Label__Text">
                                        ADD ANOTHER ARRIVAL DATE
                                    </label>
                                </div>
                            </div>
                            <button type="button" class="Polaris-Button">
                                <span class="Polaris-Button__Content">
                                    <span>
                                        Add another date
                                    </span>
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
