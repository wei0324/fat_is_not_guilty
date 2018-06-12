var tbl;
$(function() {

    //查詢
    tbl = $('#ex').DataTable({
        "scrollX": false,
        "scrollY": false,
        "scrollCollapse": false, //當筆數小於scrillY高度時,自動縮小
        "displayLength": 10,
        "paginate": true, //是否分頁
        "lengthChange": true,
        "ajax": {
            url: "comment_ajax.php",
            data: function(d) {
                return $('#comment').serialize() + "&oper=query";
            },
            type: 'POST',
            dataType: 'json'
        },
        "dom": 'frtip'
    });

    //修改
    $('tbody').on('click', '#btn_update', function() {
        var data = tbl.row($(this).closest('tr')).data();
        $('#account').val(data[0]);
        $('#content').html(data[1]);

        $('#id').val(data[5]);
        $("#no").val(data[4]);
        $("#oper").val("update");
    });

    //取消
    $('tbody').on('click', '#btn_cancel', function() {
        $("#oper").val("insert");
    });

    $("#btn-cancel").on("click", function() {
        $(".area").html("");
    });


    //刪除
    $('tbody').on('click', '#btn_delete', function() {
        var data = tbl.row($(this).closest('tr')).data();
        if (!confirm('是否確定要刪除?'))
            return false;

        $("#no").val(data[4]);
        $("#oper").val("delete"); //刪除
        CRUD();
    });

    //送出表單 (儲存)
    $("#form1").validate({
        submitHandler: function(form) {
            CRUD();
        },
        rules: {
            content: {
                required: true,
            }

        }
    });

    function CRUD() {
        $.ajax({
            url: "comment_ajax.php",
            data: $("#comment").serialize(),
            type: 'POST',
            dataType: "json",
            success: function(JData) {
                if (JData.code) {
                    toastr["error"](JData.message);
                    document.getElementById("comment").reset();
                    $(".area").html("");
                } else {
                    $("#oper").val("insert");
                    toastr["success"](JData.message);
                    tbl.ajax.reload();
                    document.getElementById("comment").reset();
                    $(".area").html("");
                }
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.responseText);
                alert(xhr.responseText);

            }
        });
    }

});
