<div class="col-md mb-5 ftco-animate fadeInUp ftco-animated" id="comment" style="background-color: white;">
    <table id="example1" class="table table-hover table-bordered" style="text-align: center;color:black">
        <thead>
            <tr>
                <th class="text-center col-1">帳號</th>
                <th class="text-center col-6">內容</th>
                <th class="text-center col-1">時間</th>
            </tr>
        </thead>
        <tbody id="comment_content">
        </tbody>
    </table>
    <div class="row">
        <nav aria-label="..." class=" mx-auto">
            <ul class="pagination" id="page">
<?php
$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if (!$link) {
    echo "連結錯誤代碼: " . mysqli_connect_errno() . "<br>"; //顯示錯誤代碼
    echo "連結錯誤訊息: " . mysqli_connect_error() . "<br>"; //顯示錯誤訊息
    exit();
}
if ($result = mysqli_query($link, "SELECT * FROM comment where productID=".$_GET['id'])) {
    $total_records = mysqli_num_rows($result);
    $total_page = ceil($total_records / 5);
}
echo "<li class=\"page-item\"><a class=\"page-link\" href=\"#section-contact\" role=\"button\" data-slide=\"prev\"><span aria-hidden=\"true\">&laquo;</span><span class=\"sr-only\">Previous</span></a></li>";
echo "<li class=\"page-item active\" data-target=\"#section-contact\" data-slide-to=\"0\"><a class=\"page-link\" href=\"#section-contact\">1</a></li>";
for ($i = 2; $i <= $total_page; $i++){
    echo "<li class=\"page-item\" data-target=\"#section-contact\" data-slide-to=\"".($i - 1)."\"><a class=\"page-link\" href=\"#section-contact\">$i</a></li>";
}
echo "<li class=\"page-item\"><a class=\"page-link\" href=\"#section-contact\" role=\"button\" data-slide=\"next\"><span aria-hidden=\"true\">&raquo;</span><span class=\"sr-only\">Next</span></a></li>";
mysqli_close($link); // 關閉資料庫連結
?>

            </ul>
        </nav>
    </div>
</div>