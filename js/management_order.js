var tbl;
$(function() {
/*form1*/
    //查詢
    tbl = $('#example1').DataTable({
        "scrollX": false,
        "scrollY": false,
        "scrollCollapse": false, //當筆數小於scrillY高度時,自動縮小
        "displayLength": 10,
        "paginate": true, //是否分頁
        "lengthChange": true,
        "ajax": {
            url: "management_order(table)_ajax.php",
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
        var data = tbl.row($(this).closest('tr')).data();
        let price = data[3].replace('$', '');

        $('#account').val(data[0]);
        $('#productID').val(data[1]);
        $('#productName').val(data[2]);

        $('#price').val(price);
        $('#quantity').val(data[4]);

        $("#id").val(data[6]);
        $("#oper").val("update");
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

        $("#id").val(data[6]);
        $("#oper").val("delete"); //刪除
        CRUD();
    });

    //送出表單 (儲存)
    $("#form1").validate({
        submitHandler: function(form) {
            CRUD();
        },
        rules: {
            account: {
              required: true,
              minlength: 4,
              maxlength: 10
            },
            productID: {
                required: true,
                number : true
            },
            productName: {
                required: true,

            },
            price: {
                required: true,
                number : true
            },
            quantity: {
                required: true,
                number : true
            },

        },
        messages:
        {
          account: {
            required: "*必填",
            minlength: "*帳號最少要4個字",
            maxlength: "*帳號最長10個字"
          },
          productID: {
              required: "必填(請勿輸入非數字之字元)"
          },
          productName: {
              required: "*必填",

          },
          price: {
              required: "必填(請勿輸入非數字之字元)"
          },
          quantity: {
                required: "必填(請勿輸入非數字之字元)"
          },
        }
    });

    function CRUD() {
        $.ajax({
            url: "management_order(table)_ajax.php",
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
