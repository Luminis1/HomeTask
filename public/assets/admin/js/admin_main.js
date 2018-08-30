var arr = [];

function initPageWidgets(){
    $('.add-focus').click(function () {
        $('.focus-help').first().show();
        $('.remove-focus').first().show();
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

    $('.submit-modal').click(function(){

        var modal = $('.name-modal').val();


        $.ajax({
            url: '/admin/setModal',
            data: {
                'label' : modal,
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
    $('.remove-modal').click(function(){
          var attr_id = $('.modal-list option:checked').data('id');

          $.ajax({
              url: '/admin/removeModal',
              data: {'attr_id' : attr_id},
              type: 'POST',
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              },
              success: function (res) {
                  $('.modal-list option:checked').remove();
                  alert('sucsess');
                  window.location.reload();
              },
              error: function(res){
                  alert('error');
              }
          });
      });
    $('.resend-email').click(function(){
        $.ajax({
            url: '/resendEmail',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                $('.resend-done').text('Email was successfully sent');
            },
            error: function(res){
                alert('error');
            }
        });
    });
}

$(document).ready(function(){
    initPageWidgets();
});