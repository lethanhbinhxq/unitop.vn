$(document).ready(function() {
    $("input[type='number']").change(function(){
        var id = $(this).attr("data-id");
        var qty = $(this).val();
        var data = {id: id, qty: qty}
        var sub_total = $(this).parent().next();
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(data) {
                sub_total.text(data.sub_total);
                $("#total-price span").text(data.total);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            }
        });
    });
})