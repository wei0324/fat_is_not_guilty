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
                if(mb_strwidth( $row["description"], "utf-8")>150)
                {
                    $description=mb_strimwidth( $row["description"],0,150)."......";

                }
                else
                {   
                    $temp="";
                    if(mb_strlen( $row["description"], "utf-8")<150)
                        for ($a=0; $a < 150-mb_strwidth( $row["description"], "utf-8") ; $a++) { 
                            $temp=$temp."&nbsp;";
                        }
                    $description=$row["description"]."......".$temp;
                }
                
                
            /*img class class=\"img-fluid\" */
            echo "<div class=\"d-block mb-4 text-center ftco-media border-0\" style=\"width: 360px; margin-right: 10px;\">
                                            <img src=\"images/products/".$row["image_name"]."\"  height=\"400px\"></img>
                                            <div class=\"media-body  p-4\">";
            echo "<h5 class=\"text-primary\">$" . $row["price"] . "</h5><h5 class=\"mt-0 h4\">" . $row["name"] . "</h5><p class=\"mb-4\">" . $description . "</p>
                                                <p class=\"mb-0\"><a href=\"products_seperate.php?id=".$row["id"]."\" class=\"btn btn-primary btn-sm\">馬上訂購</a> <a href=\"cart.php?id=" .$row["id"]. "\" class=\"btn btn-primary btn-sm\">加入購物車</a></p>
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