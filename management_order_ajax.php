<?php
echo "<div class=\"row\" id=\"order\">
                <form class=\"\" name=\"form4\" id=\"form4\" method=\"post\" style=\"overflow: auto;width:100%\" enctype=\"multipart/form-data\" >
                    <input type=\"hidden\" name=\"oper\" id=\"oper\" value=\"insert\">
                    <input type=\"hidden\" name=\"id\" id=\"id\" value=\"\">
                    <table id=\"edit\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">帳號</th>
                                <th class=\"text-center\">商品ID</th>
                                <th class=\"text-center\">商品名稱</th>
                                <th class=\"text-center\">價格</th>
                                <th class=\"text-center\">數量</th>
                                <th class=\"text-center\">存檔/取消</th>
                            </tr>
                            <tr>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"account\" name=\"account\">
                                    <br/>
                                    <label id=\"account-error\" class=\"error\" for=\"account\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"productID\" name=\"productID\">
                                    <br/>
                                    <label id=\"productID-error\" class=\"error\" for=\"productID\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"productName\" name=\"productName\" >
                                    <br/>
                                    <label id=\"productName-error\" class=\"error\" for=\"productName\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"price\" name=\"price\">
                                    <br/>
                                    <label id=\"price-error\" class=\"error\" for=\"price\"></label>
                                </td>

                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"quantity\" name=\"quantity\">
                                    <br/>
                                    <label id=\"quantity-error\" class=\"error\" for=\"quantity\"></label>
                                </td>
                                <td>
                                    <button type=\"submit\" class=\"btn btn-primary btn-xs\" id=\"btn-save\"><i class=\"glyphicon glyphicon-save\"></i>存檔</button>
                                    <button type=\"reset\" class=\"btn btn-danger btn-xs\" id=\"btn-cancel\">取消</button>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </form>
                <table id=\"example4\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                          <th class=\"text-center\">帳號</th>
                          <th class=\"text-center\">商品ID</th>
                          <th class=\"text-center\">商品名稱</th>
                          <th class=\"text-center\">價格</th>
                          <th class=\"text-center\">數量</th>
                          <th class=\"text-center\">修改/刪除</th>
                        </tr>
                    </thead>
                </table>
            </div>";
?>
