var arr = [];

function stickyHelp(){
    var helpBar = $('#general-form-help').offset();
    var help_block_with = $('#general-form-help').width();
    
    $(document).scroll(function(){
        var y = window.scrollY;
        
        if(y > helpBar.top){
            $('#general-form-help').css({
                'position': 'fixed',
                'width': help_block_with + 'px',
                'margin-top': 0,
                'top': '30px'
            });
        }else{
            $('#general-form-help').css({
                'position': 'static',
                'width': '100%',
                'margin-top': '51px',
                'top': 'auto'
            });
            $('#general-form-help').css('top', helpBar);
        }
    });
}

function initPageWidgets(){
    $('.add-focus').click(function () {
        $('.focus-help').first().show();
        $('.focus-help').first().removeClass('focus-help');
    });
    $('.submit').click(function(){
        var element = $(this).data('class');
        var name = $(".name-"+ element).val();
        var type_id = $(".name-"+ element).data('type');
        var table_id = $(".name-"+ element).data('table');

        $.ajax({
            url: '/admin/setAttribute',
            data: {
                'name' : name,
                'type_id' : type_id,
                'table_id' : table_id
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.set-help').click(function(){
        var element = $(this).data('help');
        var help = $(".help-"+ element).val();

        $.ajax({
            url: '/admin/setHelp',
            data: {
                'help' : help,
                'element' : element
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.set-slug').click(function(){
        var element = $(this).data('slug');
        var slug = $(".slug-"+ element).val();

        $.ajax({
            url: '/admin/setSlug',
            data: {
                'slug' : slug,
                'element' : element
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                window.location.reload();
                alert('sucsess');

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.remove').click(function(){
        var element = $(this).data('class');
        var attr_id = $(".list-" + element + " option:selected").data('id');

        $.ajax({
            url: '/admin/removeAttribute',
            data: {'attr_id' : attr_id},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('.list-' + element + ' option:selected').remove();
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.add-table').click(function(){
        var name = $('.table-add-name').val();
        $.ajax({
            url: '/admin/addTable',
            data: {'name' : name},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('.language-list option:selected').remove();
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.remove-table').click(function(){
        var id = $('.tables-list option:selected').data('id');

        $.ajax({
            url: '/admin/removeTable',
            data: {'id' : id},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('.tables-list option:selected').remove();
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
    $('.add-attribute').click(function(){
        var table_id = $('.tables-add-attr-list option:selected').data('id');
        var attr_name = $('.attribute-add-name').val();
        var attr_help = $('.attribute-add-help').val();
        var x = document.getElementsByClassName("attribute-required")[0].checked;
        var required = 0;
        if(x === true) {
            required = $('.attribute-required').val();
        }
        var attr_slug =$('.attribute-add-slug').val();
        var etype =$('.type-of-element option:selected').data('etype');


        $.ajax({
            url: '/admin/addReferenceTypes',
            data: {
                'table_id' : table_id,
                'attr_name' : attr_name,
                'etype' : etype,
                'attr_help' : attr_help,
                'attr_slug' : attr_slug,
                'required' : required
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('.language-list option:selected').remove();
                alert('sucsess');
                window.location.reload();

            },
            error: function(res){
                alert('error');
            }
        });
    });
}

function initNavMenu(){
    var nav_elem = $('#nav').get()[0];
    var links = $(nav_elem).find('.nav-item > a').get();
    var content_elem = $('#content').get()[0];
    var content_tabs = $(content_elem).find('.content-inner').get();
    
    $(links).on('click', function(event){
        event.preventDefault();
        var clicked_link = this;
        if(!$(clicked_link).hasClass('active')){
            var tab_name = $(clicked_link).data('tab-target');
            $(links).removeClass('active');
            $(content_tabs).removeClass('show');
            $(clicked_link).addClass('active');
            $(content_elem).find('[data-tab-content="' + tab_name + '"]').addClass('show');
        }
    });
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
    
    if(tables.length <= 0){
        return;
    }
    $(tables[0]).addClass('show');
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
    
    function goTo(table){
        if($("#general_form").valid()){
            $(tables).hide().removeClass('show');
            $("html, body").stop().animate({scrollTop: 0}, 300);
            $(table).fadeIn(300, function(){
                $(table).addClass('show');
            });
        }
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
//    $(register_form).validate();
    
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
        if($("#register-form").valid()){
            var prev_part = $(this).closest('.form-part').prev('.form-part');
            var title_id = $(prev_part).data('title-id');
            $('#register-form .form-part').removeClass('show');
            $(prev_part).addClass('show');
            $('#register_form_titles .form-title').removeClass('show');
            $('#' + title_id).addClass('show');
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

function initGeneralFormHelp(){
    var inputs = $('#general_form [data-help-text]').get();
    $(inputs).each(function(){
        var input = this;
        var help_text = $(input).data('help-text');
        if(help_text === '' || help_text === undefined || help_text === null){
            return;
        }
        $(input).mouseenter(function(){
            $('#general-form-help').addClass('active');
            $('#general-form-help .Polaris-Card__Section > p').text(help_text).hide().stop().fadeIn(200);
        });
        $(input).mouseleave(function(){
            $('#general-form-help').removeClass('active');
            $('#general-form-help .Polaris-Card__Section > p').stop().fadeOut(600, function(){
                $(this).html('<span style="color:#afafaf;">We can help you...</span>').stop().fadeIn(200);
            });
        });
    });
}

function initRegisterFormHelp(){
    var inputs = $('#register-form [data-help-text]').get();
    $(inputs).each(function(){
        var input = this;
        var help_text = $(input).data('help-text');
        if(help_text === '' || help_text === undefined || help_text === null){
            return;
        }
        $(input).mouseenter(function(){
            $('#register-form-help').addClass('active');
            $('#register-form-help .Polaris-Card__Section > p').text(help_text).hide().stop().fadeIn(200);
        });
        $(input).mouseleave(function(){
            $('#register-form-help').removeClass('active');
            $('#register-form-help .Polaris-Card__Section > p').stop().fadeOut(600, function(){
                $(this).html('<span style="color:#afafaf;">We can help you...</span>').stop().fadeIn(200);
            });
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
            form_data.forEach(function(amenity_name, index){
                var amenity_label = $('#select_amenities_form').find('input[type="checkbox"][value="' + amenity_name.value + '"]').closest('.Polaris-Choice').find('.Polaris-Choice__Label').html().trim();
                amenities_string += amenity_label;
                if((index+1) < form_data.length){
                    amenities_string += ', ';
                }
            });
            $(accomodations_item).find('.accomodation-amenities-list > .items').html(amenities_string);
            $(accomodations_item).find('.accomodation-amenities-list > .placeholder').hide();
            $(accomodations_item).find('.accomodation-amenities-list > .items').show();
        } else {
            $(accomodations_item).find('.accomodation-amenities-list > .placeholder').show();
            $(accomodations_item).find('.accomodation-amenities-list > .items').html('').hide();
        }
        $(modal).modal('hide');
    });
    
    $(select_amenities_modal).on('shown.bs.modal', function(event){
        var modal = this;
        var accomodations_item = $(event.relatedTarget).closest('.accomodations_form_item').get()[0];
        var index = $(accomodations_item).attr('data-accomodations-index');
        $(modal).attr('data-accomodations-index', index);
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
        
        // accomodation_images_input
        default_id = 'accomodation_images_input';
        new_id = default_id + '_' + current_index;
        element = $(accommodation_item).find('#' + default_id)[0];
        $(element).attr('id', new_id);
        $(element).attr('name', 'accomodation[' + current_index + '][accomodation_images]');
        $(accommodation_item).find('label[for="' + default_id + '"]').attr('for', new_id);
        
        // Increment current index
        current_index++;
    }
}

$(document).ready(function(){
    stickyHelp();
    initPageWidgets();
    initNavMenu();
    initInputsHelp();
    initTablesCore();
    initGeneralFormValidation();
    initRegisterForm();
    initHeaderDropdown();
    initGeneralFormHelp();
    initRegisterFormHelp();
    initModalsCore();
    initAccommodationLogic();
    
    $('.table-8 .go-next-btn').click();
});

