
<script type="text/javascript">

    
        function cart(add_remove,id) {
        $.ajax({
            url: 'cart_ajax.php',
            data: {
                oper: add_remove, //1:add 2:remove
                id: id,
            },
            type: 'POST',
            dataType: "json",
            success: function(Jdata) {
                if(add_remove==1)
                {
                    $((".p"+id)).attr("onclick","cart(2,"+ id +")");
                    $((".p"+id)).html("取消購物車");
                }
                else
                {
                    $((".p"+id)).attr("onclick","cart(1,"+ id +")");
                    $((".p"+id)).html("加入購物車");
                }
                $(".cart_cnt").html(Jdata.length); //顯示購物車物品數量
            },
            error: function(xhr, ajaxOptions, thrownError) {
                alert('請先登入!');
                document.location.href="login.php";
            }
        });
    }

    </script>
    <div id="gotop"><i class="fas fa-angle-up"></i></div>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.php">胖不是罪</a>
            <div id="cart1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="" class="nav-link">
                            <div class="form-inline">
                                <div style="position: relative; width: 35px; height: 35px;">
                                    <div style="position: absolute;left: 0px;bottom: 0;">
                                        <i class="fas fa-shopping-cart" style="font-size: 25px"></i>
                                    </div>
                                    <div id="cart" style="position: absolute;right: 0;top: 0;">
                                        <span class="cart_cnt">0</span>
                                        <!--<?php //echo $cnt; ?>-->
                                    </div>
                                </div>
                                購物車
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>
            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php#section-home" class="nav-link">首頁</a></li>
                    <li class="nav-item"><a href="index.php#section-offer" class="nav-link">本日精選</a></li>
                    <li class="nav-item"><a href="index.php#section-menu" class="nav-link">商品專區</a></li>
                    <li class="nav-item"><a href="index.php#section-news" class="nav-link">活動快訊</a></li>
                    <li class="nav-item"><a href="index.php#section-about" class="nav-link">關於我們</a></li>
                    <li class="nav-item"><a href="index.php#section-contact" class="nav-link">連繫我們</a></li>
                </ul>
            </div>
        </div>
        <div id="cart2">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" class="nav-link">
                        <div class="form-inline">
                            <div style="position: relative; width: 35px; height: 35px;">
                                <div style="position: absolute;left: 0px;bottom: 0;">
                                    <i class="fas fa-shopping-cart" style="font-size: 25px"></i>
                                </div>
                                <div id="cart" style="position: absolute;right: 0;top: 0;">
                                    <span class="cart_cnt">0</span>
                                    <!--<?php //echo $cnt; ?>-->
                                </div>
                            </div>
                            購物車
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <?php if (isset($_SESSION['account'])): ?>
        <div>
            <!-- member -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="" target="_blank" class="nav-link" data-toggle="modal" data-target="#Edit">
                        <div class="form-inline">
                            <div style="position: relative; width: 35px; height: 35px;">
                                <div style="position: absolute;left: 0px;bottom: 0;">
                                    <i class="fas fa-user-circle"></i>
                                </div>
                                <div style="position: absolute;right: 0;top: 0;"></div>
                            </div>
                            <?php echo $_SESSION['account']; ?>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <div>
            <!-- Logout -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="logout.php" class="nav-link" id="logout-1">
                        <div class="form-inline">
                            <div style="position: relative; width: 35px; height: 35px;">
                                <div style="position: absolute;left: 0px;bottom: 0;">
                                    <i class="fas fa-power-off"></i>
                                </div>
                                <div style="position: absolute;right: 0;top: 0;"></div>
                            </div>
                            登出
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <?php else: ?>
        <div>
            <!-- Logout -->
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="login.php" class="nav-link" id="login-1">
                        <div class="form-inline">
                            <div style="position: relative; width: 35px; height: 35px;">
                                <div style="position: absolute;left: 0px;bottom: 0;">
                                    <i class="fas fa-power-off"></i>
                                </div>
                                <div style="position: absolute;right: 0;top: 0;"></div>
                            </div>
                            登入
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <?php endif; ?>
    </nav>