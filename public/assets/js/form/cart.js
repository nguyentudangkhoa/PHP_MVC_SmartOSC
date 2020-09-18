$(document).ready(function() {
    $('.form-cart').on('submit', function(e) {
        e.preventDefault();
        var id = $(this).data('id');
        $.ajax({
            type: "POST",
            url: './index.php?controller=cart&action=addToCart',
            data: {
                id: id
            },
            success: function(data) {
                var jsonData = JSON.parse(data);
                if (jsonData.report) {
                    alert(jsonData.report);
                    if (jsonData.total) {
                        $('#session_cart').text('(' + jsonData.total + ')');
                    }
                } else {
                    alert('Invalid Credentials!');
                }
            }
        });
    })
});