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

$(document).ready(function(){
    initNavMenu();
    initInputsHelp();
});