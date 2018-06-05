//表單驗證 form1
$(document).ready(function($) {
  $.validator.setDefaults({
        ignore: []
    });
  //for select
  $.validator.addMethod("notEqualsto", function(value, element, arg) {
    return arg != value;
  }, "您尚未選擇!");

  $("#form1").validate({
    submitHandler: function(form) {

      form.submit();
    },
    rules: {
      account: {
        required: true,
        minlength: 4,
        maxlength: 10
      },
      same: {
        required: true,
      },
      pwd: {
        required: true,
        minlength: 8,
        maxlength: 12
      },
      pwd2: {
        required: true,
        equalTo: "#pwd"
      },
      mail: {
        required: true,
        email: true
      },
      addr: {
        required: true
      },


    },
    messages: {
      account: {
        required: "帳號為必填欄位",
        minlength: "帳號最少要4個字",
        maxlength: "帳號最長10個字"
      },
      same: {
        required: "",
      },
      pwd:{
        required: "密碼為必填欄位",
        minlength:"密碼最少要8個字",
        maxlength: "密碼最長12個字"
      },
      pwd2: {
        equalTo: "兩次密碼不相符"
      },

    }
  });
});
//form2
$(document).ready(function($) {
  $.validator.setDefaults({
        ignore: []
    });
  //for select
  $.validator.addMethod("notEqualsto", function(value, element, arg) {
    return arg != value;
  }, "您尚未選擇!");

  $("#form2").validate({
    submitHandler: function(form) {

      form.submit();
    },
    rules: {
      account_login: {
        required: true,
        minlength: 4,
        maxlength: 10
      },
      password_login: {
        required: true,
        minlength: 8,
        maxlength: 12
      },



    },
    messages: {
      account_login: {
        required: "帳號為必填欄位",
        minlength: "帳號最少要4個字",
        maxlength: "帳號最長10個字"
      },
      password_login:{
        required: "密碼為必填欄位",
        minlength:"密碼最少要8個字",
        maxlength: "密碼最長12個字"
      },


    }
  });
});