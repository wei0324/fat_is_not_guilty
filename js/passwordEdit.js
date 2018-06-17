
function Show_Hidden(obj) {
  if (obj.style.display == "block") {
    obj.style.display = 'none';
  } else {
    obj.style.display = 'block';
  }
}
window.onload = function() {
  //password
  var pwdE = document.getElementById("pwdButtonE");
  var pwdShow = document.getElementById("pwdShow");
  var pwdSave = document.getElementById("pwdSave");
  var pwdNew = document.getElementById("pwdEdit");
  var pwdReset = document.getElementById("pwdReset");

  pwdE.onclick  = function() {
    Show_Hidden(pwdShow);
    Show_Hidden(pwdNew);
    return true;
  }
  pwdSave.onclick  = function() {
    Show_Hidden(pwdShow);
    Show_Hidden(pwdNew);
    return true;
  }
  pwdReset.onclick  = function() {
    Show_Hidden(pwdShow);
    Show_Hidden(pwdNew);
    return true;
  }

  //mailData
  var mailE = document.getElementById("mailButtonE");
  var mailShow = document.getElementById("mailShow");
  var mailSave = document.getElementById("mailSave");
  var mailNew = document.getElementById("mailEdit");
  var mailReset = document.getElementById("mailReset");

  mailE.onclick  = function() {
    Show_Hidden(mailShow);
    Show_Hidden(mailEdit);
    return true;
  }
  mailSave.onclick  = function() {

    Show_Hidden(mailShow);
    Show_Hidden(mailNew);
    return true;
  }
  mailReset.onclick  = function() {
    Show_Hidden(mailShow);
    Show_Hidden(mailNew);
    return true;
  }

  //addrData
  var addrE = document.getElementById("addrButtonE");
  var addrShow = document.getElementById("addrShow");
  var addrSave = document.getElementById("addrSave");
  var addrNew = document.getElementById("addrEdit");
  var addrReset = document.getElementById("addrReset");

  addrE.onclick  = function() {

    Show_Hidden(addrShow);
    Show_Hidden(addrEdit);
    return true;
  }
  addrSave.onclick  = function() {

    Show_Hidden(addrShow);
    Show_Hidden(addrEdit);
    return true;

  }
  addrReset.onclick  = function() {
    Show_Hidden(addrShow);
    Show_Hidden(addrNew);
    return true;
  }


}
