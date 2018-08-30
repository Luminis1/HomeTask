function createCustomValidationMethods(){
    $.validator.methods.email = function(value, element) {
        return this.optional(element) || /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(value);
    };
    $.validator.methods.phone = function(value, element) {
        return this.optional(element) || /^\+?\d{5,13}$/.test(value);
    };
}

function initInputsHelp(){
    var forms_with_help = $('.form-with-help').get();
    $(forms_with_help).each(function(){
        var form = this;
        var help_block = $(form).find('.help-block').get()[0];
        var help_block_title = $(help_block).find('.help-title').get()[0];
        var help_block_text = $(help_block).find('.help-content').get()[0];
        var inputs_with_help = $(form).find('[data-help-support="true"]').get();
        $(inputs_with_help).each(function(){
            var input = this;
            // Focus in input
            $(input).on('focus', function(){
                var is_help_showing = $(input).data('help-showing');
                if(!is_help_showing){
                    $(inputs_with_help).data('help-showing', false);
                    if($(help_block).hasClass('show')){
                        $(help_block_title).hide().text($(input).data('help-title')).fadeIn();
                        $(help_block_text).hide().text($(input).data('help-text')).fadeIn();
                    }else{
                        $(help_block).stop().animate({
                            'width': '250px',
                            'margin-left': '3rem'
                        }, 400, 'swing', function(){
                            $(help_block_title).text($(input).data('help-title'));
                            $(help_block_text).text($(input).data('help-text'));
                            $(help_block).find('.help-title').slideDown();
                            $(help_block).find('.help-content').slideDown(200);
                            $(help_block).addClass('show');
                        });
                    }
                    $(input).data('help-showing', true);
                }
            });
        });
    });
}

function initTablesCore(){
    var form = $('#general_form').get()[0];
    var tables = $(form).find('> .content-inner').get();
    var nav_elem = $('#nav').get()[0];
    var links = $(nav_elem).find('.nav-item > a').get();
    
    if(tables.length <= 0){
        return;
    }
    $(tables[0]).addClass('show');
    
    // Tables logic
    $(tables).each(function(){
        var table = this;
        var previous_btn = $(table).find('.go-prev-btn').get()[0];
        var next_btn = $(table).find('.go-next-btn').get()[0];
        var next_table = $(table).next('.content-inner').get()[0];
        var prev_table = $(table).prev('.content-inner').get()[0];
        
        if(next_btn !== undefined && next_btn !== undefined){
            $(next_btn).on('click', function(){
                goTo(next_table);
            });
        }
        if(previous_btn !== undefined && prev_table !== undefined){
            $(previous_btn).on('click', function(){
                goTo(prev_table);
            });
        }
    });
    
    // Left nav menu links click
    $(links).on('click', function(event){
        event.preventDefault();
        var clicked_link = this;
        var current_link = $('#nav .nav-list .nav-item.active').get()[0];
        var current_link_index = $('#nav .nav-list .nav-item').index(current_link);
        var clicked_link_index = $(links).index(clicked_link);
        
        if(clicked_link_index < current_link_index){
            var teble_name = $(clicked_link).data('tab-target');
            var needle_table = $(form).find('> .content-inner[data-tab-content="' + teble_name + '"]').get()[0];
            goTo(needle_table);
        }
    });
    
    // Enable table by table element
    function goTo(table){
        if($("#general_form").valid()){
            $(tables).hide().removeClass('show');
            $("html, body").stop().animate({scrollTop: 0}, 300);
            updateNavMenuByTable(table);
            $(table).fadeIn(300, function(){
                $(table).addClass('show');
            });
        }
    }
    
    // Update left menu items condition by table element
    function updateNavMenuByTable(table){
        var table_key = $(table).data('tab-content');
        var links = $('#nav .nav-item > a').get();
        var needle_link = $('#nav .nav-item > a[data-tab-target="' + table_key + '"]').get()[0];
        var needle_link_index = $(links).index(needle_link);
        $(links).each(function(){
            var link = this;
            var link_index = $(links).index(link);
            if(link_index < needle_link_index){
                $(link).closest('.nav-item').removeClass('active done').addClass('done');
            }
            if(link_index === needle_link_index){
                $(link).closest('.nav-item').removeClass('active done').addClass('active');
            }
            if(link_index > needle_link_index){
                $(link).closest('.nav-item').removeClass('active done');
            }
        });
    }
}

function initGeneralFormValidation(){
    // Validate init
    var general_form = $("#general_form").get()[0];
    if(general_form === undefined || general_form === null){
        return;
    }
    $(general_form).validate();
}

function initRegisterForm(){
    // Validation
    var register_form = $("#register-form").get()[0];
    if(register_form === undefined || register_form === null){
        return;
    }
    $(register_form).validate();
    // Rules
    $("#email").rules("add", {
        required: true,
        email: true
    });
    $("#phone").rules("add", {
        required: true,
        minlength: 5,
        maxlength: 13,
        phone: true,
        messages: {
            phone: "Enter phone number is format: +1234567899"
        }
    });
    $("#cell_phone").rules("add", {
        required: true,
        minlength: 5,
        maxlength: 13,
        phone: true,
        messages: {
            phone: "Enter phone number is format: +1234567899"
        }
    });
    
    // Nav buttons events
    $('#register-form .go-next-btn').on('click', function(){
        if($("#register-form").valid()){
            var next_part = $(this).closest('.form-part').next('.form-part');
            var title_id = $(next_part).data('title-id');
            $('#register-form .form-part').removeClass('show');
            $(next_part).addClass('show');
            $('#register_form_titles .form-title').removeClass('show');
            $('#' + title_id).addClass('show');
        }
    });
    $('#register-form .go-prev-btn').on('click', function(){
        var prev_part = $(this).closest('.form-part').prev('.form-part');
        var title_id = $(prev_part).data('title-id');
        $('#register-form .form-part').removeClass('show');
        $(prev_part).addClass('show');
        $('#register_form_titles .form-title').removeClass('show');
        $('#' + title_id).addClass('show');
    });
    
    // Sumbmit form processing
    $('#register-form-submit').on('click', function(){
        var form_data = $(register_form).serializeArray();
        var form_data_formated = {};
        
        form_data.forEach(function(item){
            form_data_formated[item.name] = item.value;
        });

        if($(register_form).valid()){
            $.ajax({
                url: '/register',
                type: 'POST',
                // dataType: 'json',
                data: form_data_formated,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response){
                    $('.reg-verify-email').html(response);
                    
                    $('#register-form .form-part').removeClass('show');
                    $('#register_form_titles .form-title').removeClass('show');
                    $('#register-form .form-part[data-title-id="verify_your_email_address_title"]').addClass('show');
                    $('#verify_your_email_address_title').addClass('show');
                },
                error: function(res){
                    console.log('Error response:');
                    console.log(res);
                    if(res.responseJSON.email[0] !== undefined && res.responseJSON.email[0] !== null && res.responseJSON.email[0] === 'The email has already been taken.'){
                        // Email already exist
                        var error_form_part = $('#email').closest('.form-part');
                        var title_id = $(error_form_part).data('title-id');
                        $('#register-form .form-part').removeClass('show');
                        $(error_form_part).addClass('show');
                        $('#register_form_titles .form-title').removeClass('show');
                        $('#' + title_id).addClass('show');
                        var validator = $("#register-form").validate();
                        validator.showErrors({
                          "email": "The email has already been taken."
                        });
                    }
                }
            });
        }
    });
}

function initHeaderDropdown(){
    $('button.Polaris-Button').on('click', function(){
        var attr = $(this).attr('data-id');
        $('.modal[data-id='+ attr +']').css('display', 'block');
    });
    $('.Polaris-Modal-Header__CloseButton').on('click', function(){
        $('.modal').css('display','none');
    });
    $('button.Polaris-Button').on('click', function(){
        var attr = $(this).attr('data-id');
        $('.modal[data-id='+ attr +']').css('display', 'block');
    });
    $('.Polaris-Modal-Header__CloseButton').on('click', function(){
        $('.modal').css('display','none');
    });
    $( ".profile__name" ).mouseenter(function() {
        $( ".profile__menu" ).css("display", "block");
    });
    $( ".profile__menu" ).mouseleave(function() {
        $( ".profile__menu" ).css("display", "none");
    });
}

function initFormHelp(){
    var inputs = $('[data-help-text]').get();
    $(inputs).each(function(){
        var input = this;
        var help_text = $(input).data('help-text');
        if(help_text === '' || help_text === undefined || help_text === null){
            return;
        }
        $(input).mouseenter(function(){
            var wrap_offset_top = $('.form-help-wraper').offset().top;
            var input_offset_top = $(this).offset().top;
            var help_block_top = input_offset_top - wrap_offset_top;
            var input_card_block_width = $(this).closest('.Polaris-Card').width();
            var help_card_block_width = $('#form-help').closest('.Polaris-Card').width();
            
            $('#form-help').addClass('active');
            $('#form-help .Polaris-Card__Section > p').text(help_text);
            
            if(input_card_block_width === help_card_block_width){   // Mobile variant
                $('#form-help').css({
                    'opacity': 0,
                    'top': help_block_top - $('#form-help').height() - 30 + 'px',
                    'visibility': 'visible'
                });
                $('#form-help').stop().animate({
                    'opacity': 1
                },
                300);
            } else {
                $('#form-help').css({
                    'top': help_block_top + 'px',
                    'opacity': 0,
                    'visibility': 'visible'
                });
                $('#form-help').stop().animate({
                    'opacity': 1
                },
                400);
            }
        });
        $(input).mouseleave(function(){
            var input_card_block_width = $(this).closest('.Polaris-Card').width();
            var help_card_block_width = $('#form-help').closest('.Polaris-Card').width();
            
            if(input_card_block_width === help_card_block_width){   // Mobile variant
                $('#form-help').stop().animate({
                    'opacity': 0
                },
                200,
                function(){
                    $('#form-help').removeClass('active');
                    $('#form-help .Polaris-Card__Section > p').text('');
                    $('#form-help').css({'visibility': 'hidden'});
                });
            } else {
                $('#form-help').stop().animate({
                    'opacity': 0
                },
                200,
                function(){
                    $('#form-help').removeClass('active');
                    $('#form-help .Polaris-Card__Section > p').text('');
                    $('#form-help').css({'visibility': 'hidden'});
                });
            }
        });
    });
}

function initModalsCore(){
    $('.modal').each(function(){
        var modal = this;
        $(modal).modal('hide');
    });
}

function initAccommodationLogic(){
    var accommodation_first_item = $('#accomodations_form_parts .accomodations_form_item').get()[0];
    var accommodation_template = $(accommodation_first_item).clone();
    var add_btn = $('#add_accommodation_btn').get()[0];
    var current_index = 0;
    var select_amenities_modal = $('#select_amenities_modal').get()[0];
    
    // Init first item
    initAccommodationFormBlock(accommodation_first_item);
    
    $(add_btn).on('click', function(){
        var new_accommodation_item = $(accommodation_template).clone()[0];
        $('#accomodations_form_parts').append(new_accommodation_item);
        $(new_accommodation_item).hide().slideDown();
        initAccommodationFormBlock(new_accommodation_item);
    });
    
    $('#select_amenities_form_submit').on('click', function(event){
        var modal = $('#select_amenities_modal').get()[0];
        var select_amenities_form = $('#select_amenities_form').get()[0];
        var form_data = $(select_amenities_form).serializeArray();
        var index = $(modal).attr('data-accomodations-index');
        var accomodations_item = $('#accomodations_form_parts .accomodations_form_item[data-accomodations-index="' + index + '"]');
        if(form_data.length > 0){
            var amenities_string = '';
            var amenities_arr = [];
            form_data.forEach(function(amenity_name, index){
                var amenity_label = $('#select_amenities_form').find('input[type="checkbox"][value="' + amenity_name.value + '"]').closest('.Polaris-Choice').find('.Polaris-Choice__Label').html().trim();
                amenities_string += amenity_label;
                if((index+1) < form_data.length){
                    amenities_string += ', ';
                }
                amenities_arr.push(amenity_name.value);
            });
            $(accomodations_item).find('.accomodation-amenities-list > .items').html(amenities_string);
            $(accomodations_item).find('.accomodation-amenities-list > .placeholder').hide();
            $(accomodations_item).find('.accomodation-amenities-list > .items').show();
            $(accomodations_item).find('input.accomodation_amenities_data').val(JSON.stringify(amenities_arr));
        } else {
            $(accomodations_item).find('.accomodation-amenities-list > .placeholder').show();
            $(accomodations_item).find('.accomodation-amenities-list > .items').html('').hide();
            $(accomodations_item).find('input.accomodation_amenities_data').val('');
        }
        $(modal).modal('hide');
    });
    
    $(select_amenities_modal).on('shown.bs.modal', function(event){
        var modal = this;
        var accomodations_item = $(event.relatedTarget).closest('.accomodations_form_item').get()[0];
        var index = $(accomodations_item).attr('data-accomodations-index');
        var amenities_data = $(accomodations_item).find('.accomodation_amenities_data').val();
        
        if(amenities_data !== ''){
            amenities_data = JSON.parse(amenities_data);
            amenities_data.forEach(function(item){
                var checkbox = $(modal).find('input[type="checkbox"][value="' + item + '"]').get()[0];
                checkbox.checked = true;
            });
        }
        $(modal).attr('data-accomodations-index', index);
    });
    
    $(select_amenities_modal).on('hidden.bs.modal', function(){
        var modal = this;
        $(modal).find('input[type="checkbox"]').each(function(){
            if(this.checked === true){
                this.checked = false;
            }
        });
    });
    
    function initAccommodationFormBlock(accommodation_item){
        var default_id, new_id, element;
        // Set index data for accommodation item
        $(accommodation_item).attr('data-accomodations-index', current_index);
        
        // Select hotel type
        default_id = 'accomodation_type_select';
        new_id = default_id + '_' + current_index;
        element = $(accommodation_item).find('#' + default_id)[0];
        $(element).attr('id', new_id);
        $(element).attr('name', 'accomodation[' + current_index + '][hotel_type]');
        $(accommodation_item).find('label[for="' + default_id + '"]').attr('for', new_id);
        
        // Input hotel name
        default_id = 'hotel_name_input';
        new_id = default_id + '_' + current_index;
        element = $(accommodation_item).find('#hotel_name_input')[0];
        $(element).attr('id', new_id);
        $(element).attr('name', 'accomodation[' + current_index + '][hotel_name]');
        $(accommodation_item).find('label[for="' + default_id + '"]').attr('for', new_id);
        
        // Textarea short description
        default_id = 'hotel_short_description_textarea';
        new_id = default_id + '_' + current_index;
        element = $(accommodation_item).find('#' + default_id)[0];
        $(element).attr('id', new_id);
        $(element).attr('name', 'accomodation[' + current_index + '][short_description]');
        $(accommodation_item).find('label[for="' + default_id + '"]').attr('for', new_id);
        
        // Accomodation images_input
        default_id = 'accomodation_images_input';
        new_id = default_id + '_' + current_index;
        element = $(accommodation_item).find('#' + default_id)[0];
        $(element).attr('id', new_id);
        $(element).attr('name', 'accomodation[' + current_index + '][accomodation_images]');
        $(accommodation_item).find('label[for="' + default_id + '"]').attr('for', new_id);
        
        // Accomodation amenities data hidden input
        element = $(accommodation_item).find('.accomodation_amenities_data')[0];
        $(element).attr('name', 'accomodation[' + current_index + '][amenities_data]');
        
        // Increment current index
        current_index++;
    }
}

$(document).ready(function(){
    createCustomValidationMethods();
    initInputsHelp();
    initTablesCore();
    initGeneralFormValidation();
    initRegisterForm();
    initHeaderDropdown();
    initFormHelp();
    initModalsCore();
    initAccommodationLogic();
});

