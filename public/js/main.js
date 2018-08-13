
jQuery(document).ready(function () {
    jQuery('.submit').click(function(){

        var element = jQuery(this).data('class');
        var name = jQuery("."+ element + "-name").val();
        var type_id = jQuery("."+ element + "-name").data('type');
        var table_id = jQuery("."+ element + "-name").data('table');


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
        var attr_id = jQuery("." + element + "-list option:selected").data('id');
        console.log(attr_id);

        jQuery.ajax({
            url: '/admin/removeAttribute',
            data: {'attr_id' : attr_id},
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