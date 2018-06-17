<?php
echo "<div class=\"row\" id=\"products\">
                <form class=\"\" name=\"form1\" id=\"form1\" method=\"post\" style=\"overflow: auto;width:100%\" enctype=\"multipart/form-data\" >
                    <input type=\"hidden\" name=\"oper\" id=\"oper\" value=\"insert\">
                    <input type=\"hidden\" name=\"id\" id=\"id\" value=\"\">
                    <table id=\"edit\" class=\"table table-striped table-bordered\">
                        <thead>
                            <tr>
                                <th class=\"text-center\">品名</th>
                                <th class=\"text-center\">價格</th>
                                <th class=\"text-center\">商品描述</th>
                                <th class=\"text-center\">圖片</th>
                                <th class=\"text-center\">存檔/取消</th>
                            </tr>
                            <tr>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"name\" name=\"name\">
                                    <br/>
                                    <label id=\"name-error\" class=\"error\" for=\"name\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"text\" id=\"price\" name=\"price\">
                                    <br/>
                                    <label id=\"price-error\" class=\"error\" for=\"price\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <textarea id=\"description\" name=\"description\" style=\"resize:none;height: 100%;width:100%\" class=\"area\"></textarea>
                                    <br/>
                                    <label id=\"description-error\" class=\"error\" for=\"description\"></label>
                                </td>
                                <td class=\"text-center\">
                                    <input type=\"file\" id=\"image_name\" name=\"image_name\">
                                    <br/>
                                    <label id=\"image_name-error\" class=\"error\" for=\"image_name\"></label>
                                </td>
                                <td>
                                    <button type=\"submit\" class=\"btn btn-primary btn-xs\" id=\"btn-save\"><i class=\"glyphicon glyphicon-save\"></i>存檔</button>
                                    <button type=\"reset\" class=\"btn btn-danger btn-xs\" id=\"btn-cancel\">取消</button>
                                </td>
                            </tr>
                        </thead>
                    </table>
                </form>
                <table id=\"example\" class=\"table table-striped table-bordered\">
                    <thead>
                        <tr>
                            <th class=\"text-center\">品名</th>
                            <th class=\"text-center\">價格</th>
                            <th class=\"text-center\">商品描述</th>
                            <th class=\"text-center\">圖片</th>
                            <th class=\"text-center\">修改/刪除</th>
                        </tr>
                    </thead>
                </table>
            </div>";
?>