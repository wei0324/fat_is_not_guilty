<?php
      error_reporting(E_ERROR |  E_PARSE);
    session_start();
    if (isset($_SESSION['cart'])) {
        $cnt = count($_SESSION['cart']);
    } else {
        $cnt = 0;
    }
?>
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
                                <div id="cart" style="position: absolute;right: 0;top: 0;"><?php echo $cnt; ?></div>
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
                <li class="nav-item active"><a href="#section-home" class="nav-link">首頁</a></li>
                <li class="nav-item"><a href="#section-offer" class="nav-link">本日精選</a></li>
                <li class="nav-item"><a href="#section-menu" class="nav-link">商品專區</a></li>
                <li class="nav-item"><a href="#section-news" class="nav-link">活動快訊</a></li>
                <li class="nav-item"><a href="#section-about" class="nav-link">關於我們</a></li>
                <li class="nav-item"><a href="#section-contact" class="nav-link">連繫我們</a></li>
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
                            <div id="cart" style="position: absolute;right: 0;top: 0;"><?php echo $cnt; ?></div>
                        </div>
                        購物車
                    </div>
                </a>
            </li>
        </ul>
    </div>
</nav>
