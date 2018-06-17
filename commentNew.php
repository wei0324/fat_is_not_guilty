

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8 text-center">
            <form class="form-horizontal form-inline" name="comment" id="comment" method="post">
                <input type="hidden" name="oper" id="oper" value="insert">
                <input type="hidden" name="id" id="id" value="">
                <table id="edit" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                          <th class="text-center">帳號</th>
                          <th class="text-center">內容</th>
                          <th class="text-center">時間</th>
                            <th class="text-center">存檔/取消</th>
                        </tr>
                        <tr>
                            <td class="text-center">
                                <?php
                                    echo $_SESSION['account'];
                                 ?>
                            </td>
                            <td class="text-center">
                                <textarea id="content" name="content" style="resize:none;height: 100px" class="area"></textarea>
                            </td>
                            <td class="text-center">
                                <?php
                                    echo @$date;
                                 ?>
                            </td>
                            <td>
                                <button type="submit" class="btn btn-primary btn-xs" id="btn-save"><i class="glyphicon glyphicon-save"></i>存檔</button>
                                <button type="reset" class="btn btn-danger btn-xs" id="btn-cancel">取消</button>
                            </td>
                        </tr>
                    </thead>
                </table>
            </form>
            <table id="example" class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">帳號</th>
                        <th class="text-center">內容</th>
                        <th class="text-center">時間</th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="col-md-2"></div>
    </div>
