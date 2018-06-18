<?php
echo "<div class=\"row\" id=\"message\">
                <form class=\"\" name=\"form1\" id=\"form1\" method=\"post\" style=\"overflow: auto;width:100%\" >
                    <input type=\"hidden\" name=\"oper\" id=\"oper\" value=\"insert\">
                    <input type=\"hidden\" name=\"id\" id=\"id\" value=\"\">
                    <table id=\"edit\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">姓名</th>
                                <th class=\"text-center\">信箱</th>
                                <th class=\"text-center\">訊息</th>
                                <th class=\"text-center\">存檔/取消</th>
                            </tr>
                            <tr>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"name\" name=\"name\">
                                    <br/>
                                    <label id=\"name-error\" class=\"error\" for=\"name\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"email\" id=\"email\" name=\"email\">
                                    <br/>
                                    <label id=\"email-error\" class=\"error\" for=\"email\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <textarea id=\"content\" name=\"content\" style=\"resize:none;height: 100%;width:100%\" class=\"area\"></textarea>
                                    <br/>
                                    <label id=\"message-error\" class=\"error\" for=\"message\"></label>
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
                            <th class=\"text-center\">姓名</th>
                            <th class=\"text-center\">信箱</th>
                            <th class=\"text-center\">訊息</th>
                            <th class=\"text-center\">修改/刪除</th>
                        </tr>
                    </thead>
                </table>
            </div>";
?>
