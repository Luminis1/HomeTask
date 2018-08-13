
jQuery(document).ready(function () {
    jQuery('.submit').click(function(){

        var element = jQuery(this).data('class');
        var name = jQuery(".name-"+ element).val();
        var type_id = jQuery(".name-"+ element).data('type');
        var table_id = jQuery(".name-"+ element).data('table');

        jQuery.ajax({
        url: '/admin/setAttribute',
        data: {
            'name' : name,
            'type_id' : type_id,
            'table_id' : table_id,
        },
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (res) {
            alert('sucsess')

        },
        error: function(res){
            alert('error');
        }
    })
    });
    jQuery('.remove').click(function(){
        var element = jQuery(this).data('class');
        var attr_id = jQuery(".list-" + element + " option:selected").data('id');

        jQuery.ajax({
            url: '/admin/removeAttribute',
            data: {'attr_id' : attr_id},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                jQuery('.list-' + element + ' option:selected').remove();
                alert('sucsess');

            },
            error: function(res){
                alert('error');
            }
        })
    });
    jQuery('.add-table').click(function(){
        var name = jQuery('.table-add-name').val();
        jQuery.ajax({
            url: '/admin/addTable',
            data: {'name' : name},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                jQuery('.language-list option:selected').remove();
                alert('sucsess');

            },
            error: function(res){
                alert('error');
            }
        })
    });
    jQuery('.remove-table').click(function(){
        var id = jQuery('.tables-list option:selected').data('id');

        jQuery.ajax({
            url: '/admin/removeTable',
            data: {'id' : id},
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                jQuery('.tables-list option:selected').remove();
                alert('sucsess');

            },
            error: function(res){
                alert('error');
            }
        })
    });
    jQuery('.add-attribute').click(function(){

        var table_id = jQuery('.tables-add-attr-list option:selected').data('id');
        var attr_name =jQuery('.attribute-add-name').val();

        jQuery.ajax({
            url: '/admin/addReferenceTypes',
            data: {
                'table_id' : table_id,
                'attr_name' : attr_name,
            },
            type: 'POST',
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (res) {
                jQuery('.language-list option:selected').remove();
                alert('sucsess');

            },
            error: function(res){
                alert('error');
            }
        })
    });
});