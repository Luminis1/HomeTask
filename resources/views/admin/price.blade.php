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
                            <input type="radio" name="date-type" value="once">
                            <label>It's a one time retreat</label>
                            <br>
                            <input type="radio" name="date-type" value="multiple">
                            <label>It has multiple starting dates</label>
                            <br>
                            <input type="radio" name="date-type" value="certain">
                            <label>It's open for a certain period(s)</label>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="once">
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
        </div>
    </div>
    <div class="multiple">
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
                            <div class="Polaris-TextField">
                                <input type="button" value="Add another date">
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
                            <input type="radio" name="arrival" value="Daily">
                            <label>Daily</label>
                            <br>
                            <input type="radio" name="arrival" value="Weekly">
                            <label>Weekly</label>
                            <br>
                            <input type="radio" name="arrival" value="Monthly">
                            <label>Monthly</label>
                            <br>
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
                            <div class="Polaris-TextField">
                                <input type="button" value="Add another date">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('admin.partials._nav_buttons', ['table' => $v])
</div>
