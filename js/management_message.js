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
             url: "management_message(table)_ajax.php",
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
         let message = data[2].replace(/<br \/>/g, ''); // 處理nl2br造成的問題

         $('#name').val(data[0]);
         $('#email').val(data[1]);
         $('#content').html(message);
         $("#id").val(data[4]);
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

         $("#id").val(data[4]);
         $("#oper").val("delete"); //刪除
         CRUD();
     });

     //送出表單 (儲存)
     $("#form1").validate({
         submitHandler: function(form) {
             CRUD();
         },
         rules: {
             name: {
                 required: true,
             },
             price: {
                 required: true
             },
             description: {
                 required: true
             },
             image_name: {
                 required: true
             },
         },
         messages:
         {
            price: {
                 required: "必填(請勿輸入非數字之字元)"
             },
             image_name: {
                 required: ""
             },
         }
     });

     function CRUD() {
         $.ajax({
             url: "management_message(table)_ajax.php",
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
