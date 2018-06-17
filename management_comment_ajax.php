<?php
echo "<div class=\"row\" id=\"comment\">
                <form class=\"\" name=\"form1\" id=\"form1\" method=\"post\" style=\"overflow: auto;width:100%\">
                    <input type=\"hidden\" name=\"oper\" id=\"oper\" value=\"insert\">
                    <input type=\"hidden\" name=\"no\" id=\"no\" value=\"\">
                    <table id=\"edit\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">產品ID</th>
                                <th class=\"text-center\">帳號</th>
                                <th class=\"text-center\">內容</th>
                                <th class=\"text-center\">存檔/取消</th>
                            </tr>
                            <tr>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"productID\" name=\"productID\">
                                    <br/>
                                    <label id=\"productID-error\" class=\"error\" for=\"productID\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"account\" name=\"account\">
                                    <br/>
                                    <label id=\"account-error\" class=\"error\" for=\"account\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <textarea id=\"content\" name=\"content\" style=\"resize:none;height: 100%;width:100%\" class=\"area\"></textarea>
                                    <br/>
                                    <label id=\"content-error\" class=\"error\" for=\"content\"></label>
                                </td>
                                <td>
                                    <button type=\"submit\" class=\"btn btn-primary btn-xs\" id=\"btn-save\"><i class=\"glyphicon glyphicon-save\"></i>存檔</button>
                                    <button type=\"reset\" class=\"btn btn-danger btn-xs\" id=\"btn-cancel\">取消</button>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </form>
                <table id=\"example1\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">產品ID</th>
                            <th class=\"text-center\">帳號</th>
                            <th class=\"text-center\">內容</th>
                            <th class=\"text-center\">時間</th>
                            <th class=\"text-center\">修改/刪除</th>
                        </tr>
                    </thead>
                </table>
            </div>";
?>
