//ajax to controll attributes
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
        var attr_help =jQuery('.attribute-add-help').val();
        var attr_slug =jQuery('.attribute-add-slug').val();
        var etype =jQuery('.type-of-element option:selected').data('etype');


        jQuery.ajax({
            url: '/admin/addReferenceTypes',
            data: {
                'table_id' : table_id,
                'attr_name' : attr_name,
                'etype' : etype,
                'attr_help' : attr_help,
                'attr_slug' : attr_slug,
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
var arr = [];
// jQuery(document).ready(function () {
//     jQuery('.tbutton').click(function(){
//         jQuery('div.basics>div').each(function () {
//
//             var cls = jQuery(this).find('input').attr('class');
//             var val = jQuery(this).find('input').val();
//             if(cls != "" && val != "" && cls != 'undefined' && val != 'undefined') {
//                 arr[cls] = val;
//             }
//             cls = jQuery(this).find('select').attr('class');
//             val = jQuery(this).find('select option:selected').data('val');
//
//             if(cls != "" && val != "" && cls != 'undefined' && val != 'undefined') {
//                 arr[cls] = val;
//             }
//
//             cls = jQuery(this).find('input[type=checkbox]').attr('class');
//             // val = jQuery(this).find('input[type=checkbox]:checked').val();
//             val = $('input:checkbox:checked').map(function() {return this.value;}).get();
//             console.log(cls);
//             console.log(val);
//
//             if(cls != "" && val != "" && cls != 'undefined' && val != 'undefined') {
//                 arr[cls] = val;
//             }
//
//
//         });
//         console.log(arr);
//         // console.log(test);
//     });
// });
jQuery(document).ready(function () {
    jQuery('.add-focus').click(function () {
        jQuery('.focus-help').first().show();
        jQuery('.focus-help').first().removeClass('focus-help');
    });
});

