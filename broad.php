<?php

/*$guestName=$_POST['guestName'];
$guestContent=$_POST['guestContent'];
$guestTime = date("Y:m:d H:i:s",time()+28800);*/

/*if(isset($guestName)){
mysql_query("insert into guest value('','$guestName','$guestTime','$guestContent','','')");
header("location:p13-show.php");
}*/
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>我要留言</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <style>
    .container {
        margin: auto;
        background-color: #f5f5f5;
        width: 800px;
        padding-bottom: 20px;
    }

    .button {
        text-align: center;
        padding: 20px 0;
    }

    .top h3 {
        font-family: 微軟正黑體;
        text-align: center;
        padding: 10px 0;
    }

    .form-group {
        font-family: 微軟正黑體;
        font-size: 16px;
    }
    </style>

    <body>
        <div class="container">
            <div class="top">
                <h3>新增留言</h3>
            </div>
            <form id="form1" name="form1" method="post" action="" class="form-horizontal">
                <div class="form-group">
                    <label for="guestName" class="col-sm-4 control-label">暱稱：</label>
                    <div class="col-sm-6">
                        <input type="text" class="form-control" placeholder="您的暱稱" name="guestName" id="guestName" />
                    </div>
                </div>
                <div class="form-group">
                    <label for="guestContent" class="col-sm-4 control-label">留言內容：</label>
                    <div class="col-sm-6">
                        <textarea name="guestContent" class="form-control" id="guestContent" rows="5"></textarea>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name="button" id="button" value="送出" class="btn" />
                </div>
            </form>
        </div>
        <div class="container">
            <ul class="pull-left nav nav-tabs">
                <li><a href="index.php">Home</a></li>
            </ul>
            <ul class="pull-right nav nav-tabs">
                <li><a href="" target="_blank" data-toggle="modal" data-target="#reservationModal">Log In</a></li>
            </ul>
        </div>
        </div>
    </body>

    </html>