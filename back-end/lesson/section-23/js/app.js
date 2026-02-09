$(document).ready(function() {
    $("#num_order").change(function(){
        var num_order = $("#num_order").val();
        var price = $("#price").text();
        var data = {num_order: num_order, price: price};
        $.ajax({
            url: 'process.php',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function(data) {
                $("#total").text(data.total);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
})