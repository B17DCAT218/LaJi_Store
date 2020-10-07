<header id="header">
    <!-- top header -->
    <div class="top-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-6"> <span><i class="fa fa-phone"></i> (04) 6674 2332</span> <span><i class="fa fa-envelope-o"></i> <a href="mailto:support@mail.com">support@mail.com</a></span> </div>
                <div class="col-xs-12 col-sm-6 col-md-6 customer">
                        <!-- <a href="/Account/Login">Đăng nhập</a>&nbsp; &nbsp;<a href="/Account/Register">Đăng ký</a> -->
                </div>
            </div>
        </div>
    </div>
    <!-- end top header -->
    <!-- middle header -->
    <div class="mid-header">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-3 logo "> <a href="index.php"> <img src="assets/100/047/633/themes/517833/assets/logo221b.png?1481775169361" alt="DKT Store" title="DKT Store" class="img-responsive"> </a> </div>
                <div class="col-xs-12 col-sm-12 col-md-6 header-search">
                    <script type="text/javascript">
                        function search() {
                            key = document.getElementById("key").value;
                            location.href = "index.php?controller=search&key=" + key;
                            return false;
                        }
                        function searchForm(event) {
                            //neu keypress la enter
                            if (event.keyCode == 13) {
                                key = document.getElementById("key").value;
                                //alert(key);
                                location.href = "index.php?controller=search&key=" + key;
                            }
                            return false;
                        }
                    </script>
                    <!--<form method="post" id="frm" action="">-->
                    <div style="margin-top:25px;">
                        <input type="text" onkeypress="searchForm(event);" value="" placeholder="Nhập từ khóa tìm kiếm..." id="key" class="input-control">
                        <button style="margin-top:5px;" type="submit"> <i class="fa fa-search" onclick="return search();"></i> </button>
                    </div>
                    <!--</form>-->
                </div>
                <div class="col-xs-12 col-sm-12 col-md-3 mini-cart">
                    <div class="wrapper-mini-cart">
                        <span class="icon"><i class="fa fa-shopping-cart"></i></span> <a href="cart"> <span class="mini-cart-count"> 
                        <?php 
                            //dem xem co bao nhieu san pham trong gio hang
                            if(isset($_SESSION["cart"]))
                                echo count($_SESSION["cart"]);
                            else
                                echo "0";
                         ?>
                         </span> sản phẩm <i class="fa fa-caret-down"></i></a>
                        <div class="content-mini-cart">
                            <div class="has-items">
                                <ul class="list-unstyled">
        <?php if(isset($_SESSION["cart"])): ?>
            <?php foreach($_SESSION["cart"] as $product): ?>
                <li class="clearfix" id="item-1853038">
                    <div class="image"> <a href="index.php?controller=cart"> <img alt="<?php echo $product["name"]; ?>" src="assets/upload/Products/<?php echo $product["photo"]; ?>" title="<?php echo $product["name"]; ?>" class="img-responsive"> </a> </div>
                    <div class="info">
                        <h3><a href="index.php?controller=cart"><?php echo $product["name"]; ?></a></h3>
                        <p><?php echo $product["number"]; ?> x <?php echo number_format($product["price"]); ?>0₫</p>
                    </div>
                    <div> <a href="index.php?controller=cart&action=delete&id=<?php echo $product["id"]; ?>"> <i class="fa fa-times"></i></a> </div>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>        
                                </ul>
                                <a href="/Cart/Checkout" class="button">Thanh toán</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end middle header -->
        <!-- bottom header -->
        <div class="bottom-header">
            <div class="container">
                <div class="clearfix">
                    <ul class="main-nav hidden-xs hidden-sm list-unstyled">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li class="has-submenu">
                            <a href="/collections/all">
                            <span>Sản phẩm</span><i class="fa fa-caret-down" style="margin-left: 5px;"></i>
                            </a>
                            <?php 
                                include "controllers/CategoriesController.php";
                                $obj = new CategoriesController();
                                $obj->index();
                                 ?>
                        </li>
                        <li><a href="index.php?controller=cart">Giỏ hàng</a></li>
                        <li><a href="#">Tin tức</a></li>
                        <li><a href="#">Liên hệ</a></li>
                    </ul>
                    <a href="javascript:void(0);" class="toggle-main-menu hidden-md hidden-lg"> <i class="fa fa-bars"></i> </a>
                    <ul class="list-unstyled mobile-main-menu hidden-md hidden-lg" style="display:none">
                        <li class="active"><a href="index.php">Trang chủ</a></li>
                        <li><a href="#">Giới thiệu</a></li>
                        <li><a href="index.php?controller=tintuc">Tin tức</a></li>
                        <li><a href="index.php?controller=lienhe">Liên hệ</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- end bottom header -->
</header>