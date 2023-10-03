$(document).ready(function () {
    $(".num-order").change(function () {
        var id = $(this).attr('data-id');
        var qty = $(this).val();
        var data = { id: id, qty: qty };
        $.ajax({
            url: '?mod=cart&act=update_ajax',
            method: 'POST',
            data: data,
            dataType: 'json',
            success: function (data) {
                // xử lí giá trị trả về
                $("#sub_total_" + id).text(data.sub_total);
                $("#total_price span").text(data.total);
                console.log(data);
            },
            error: function (xhr, ajaxOptions, thrownError) {
                alert(xhr.Status);
                alert(thrownError);
            },

        });
    });
});