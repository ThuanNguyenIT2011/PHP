$(document).ready(function(){
    $('.num-order').change(function(){
        // alert('abc');
        let id = $(this).attr('data-id');
        let quality = $(this).val();
        // console.log(id + '|' + quality);

        let data = {id: id, quality: quality};
        
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'post',
            data: data,
            dataType: 'json',
            success: function(data){
                // console.log(data);
                // console.log(data.sub_total);
                // console.log(data);

                $('#sub_total').text(data.total);// = currency_format(data.sub_total);
                $('#sub-total'+id).text(data.sub_total);
            },
            error: function(xhr,ajaxOptions,thrownError){
                alert(xhr.status);
                alert(thrownError);
            }
        })
    });
});