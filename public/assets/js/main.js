var arr = [];

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

$(document).ready(function(){
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
});

