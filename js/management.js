$(function() { //網頁完成後才會載入

        $.ajax({
            url: "management_products_ajax.php",
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
            url: "js/management_products.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    $('#products_select').click(function() {
        $.ajax({
            url: "management_products_ajax.php",
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
            url: "js/management_products.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    $('#comment_select').click(function() {
        $.ajax({
            url: "management_comment_ajax.php",
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
            url: "js/management_comment.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
    $('#message_select').click(function() {
        $.ajax({
            url: "management_message_ajax.php",
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
            url: "js/management_message.js",
            dataType: "script",
            success: function() {},
            error: function(xhr, ajaxOptions, thrownError) {
                alert(xhr.status);
                alert(thrownError);
            }
        });
    });
});