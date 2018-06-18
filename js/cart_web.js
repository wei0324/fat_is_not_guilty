$(function() { //網頁完成後才會載入

        $.ajax({
            url: "cart_web_products_ajax.php",
            dataType: 'text',
            success: function(msg) {
                $("#CRUD").html(msg); //顯示訊息
                //document.getElementById('show_msg').innerHTML= msg ;
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        $.ajax({
            url: "js/cart_web_products.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    $('#cart_products_select').click(function() {
        $.ajax({
            url: "cart_web_products_ajax.php",
            dataType: 'text',
            success: function(msg) {
                $("#CRUD").html(msg); //顯示訊息
                //document.getElementById('show_msg').innerHTML= msg ;
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
        $.ajax({
            url: "js/cart_web_products.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});
