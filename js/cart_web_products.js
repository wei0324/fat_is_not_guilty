var tbl;
$(function() {
/*form1*/
    //查詢
    tbl = $('#example').DataTable({
        "scrollX": false,
        "scrollY": false,
        "scrollCollapse": false, //當筆數小於scrillY高度時,自動縮小
        "displayLength": 10,
        "paginate": true, //是否分頁
        "lengthChange": true,
        "ajax": {
            url: "cart_web_products(table)_ajax.php",
            data: function(d) {
               return $('#form1').serialize() + "&oper=query";
            },
            type: 'POST',
            dataType: 'json'
        },
        "dom": 'frtip'
    });

    //修改
    $('tbody').on('click', '#btn_update', function() {
      $("#form1").validate({
        submitHandler:function(form) {
          $("#oper").val("update");
          $("#id").val(data[4]);
          CRUD();
        },
      });
    });

    //取消
    $('tbody').on('click', '#btn-cancel', function() {
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

        $("#id").val(data[4]);
        $("#oper").val("delete"); //刪除
        CRUD();
    });


    function CRUD() {
        $.ajax({
            url: "cart_web_products(table)_ajax.php",
            data: $("#form1").serialize(),
            type: 'POST',
            dataType: "json",
            success: function(JData) {
                if (JData.code) {
                    toastr["error"](JData.message);
                    document.getElementById("form1").reset();
                    $(".area").html("");
                } else {
                    $("#oper").val("insert");
                    toastr["success"](JData.message);
                    tbl.ajax.reload();
                    document.getElementById("form1").reset();
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
