<?php
header('Content-Type: text/xml;charset=utf-8;Pragma: no-cache;Cache-Control: no-cache;');
$link = mysqli_connect('localhost', 'root', 'root123456', 'group_15');
mysqli_query($link, 'SET CHARACTER SET utf8');
mysqli_query($link, "SET collation_connection = 'utf8_unicode_ci'");
if ($result = mysqli_query($link, "SELECT * FROM products")) {
    $total_records = mysqli_num_rows($result);
    $total_page = ceil($total_records / 9);
    mysqli_data_seek($result, (@$_GET['page'] - 1) * 9);
    echo "<div ><div class=\"aaa owl-loaded\">";
    for ($j = 1; $j <= 3; $j++) {
        echo "<div class=\"bbb form-inline\">";
        for ($k = 1; $k <= 3; $k++) {
            $row = mysqli_fetch_assoc($result);
            if(!is_null($row))
            {
                
            /*img class class=\"img-fluid\" */
            echo "<div class=\"d-block mb-4 text-center ftco-media border-0\" style=\"width: 360px; margin-right: 10px;\">
                                            <img src=\"images/products/".$row["image_name"]."\"  height=\"400px\">
                                            <div class=\"media-body  p-4\">";
            echo "<h5 class=\"text-primary\">" . $row["price"] . "</h5><h5 class=\"mt-0 h4\">" . $row["name"] . "</h5><p class=\"mb-4\">" . $row["description"] . "</p>
                                                <p class=\"mb-0\"><a href=\"menu.php\" class=\"btn btn-primary btn-sm\">馬上訂購</a></p>
                                            </div>
                                        </div>";
                                    }
        }
        echo "</div>";

    }
    echo "</div></div>";

}

mysqli_free_result($result); // 釋放佔用的記憶體

mysqli_close($link); // 關閉資料庫連結

?>
<?php


?>