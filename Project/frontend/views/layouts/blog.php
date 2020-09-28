
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<div class="wrapper">
    <!-- header -->
    <?php require_once 'header_sp.php'; ?>
    <div class="main">
        <div class="row">
            <div class="blog-left">
                <div class="hot-news">
                    <fieldset style="margin: auto; border: 1px solid gray; width: 300px;">
                        <div style="text-align: center; font-size: 20px;">BÀI VIẾT MỚI NHẤT</div>
                        <ul>
                            <li>
                                <img src="assets/images/news1.jpg">
                                <div class="p" >Sức hút của vàng hồng trong ngành trang sức</div>
                                <div style="clear: both;"></div>
                            </li>
                            <hr>
                            <li>
                                <img src="assets/images/news2.jpg">
                                <div class="p">Kiểu cắt Round - Bí mật của tuyệt tác kim cương</div>
                                <div style="clear: both;"></div>
                            </li>
                            <hr>
                            <li>
                                <img src="assets/images/news3.jpg">
                                <div class="p">Những biểu tượng nhan sắc gắn liền với nghệ thuật kim hoàn</div>
                                <div style="clear: both;"></div>
                            </li>
                        </ul>
                    </fieldset>
                </div>
                <div class="list">
                    <fieldset style="margin: auto; border: 1px solid gray; width: 300px;">
                        <div style="text-align: center; font-size: 20px;">DANH MỤC BLOG</div>
                        <hr>
                        <ul>
                            <li>Trang chủ</li>
                            <hr>
                            <li>Bộ sưu tập</li>
                            <hr>
                            <li>Sản phẩm</li>
                            <hr>
                            <li>Blog</li>
                            <hr>
                            <li>Giới thiệu</li>
                        </ul>
                    </fieldset>
                </div>
            </div>
            <div class="tin-tuc">
                <div style="font-size: 30px; font-weight: bold;"> TIN TỨC</div>
                <ul>
                    <li>
                        <img src="assets/images/news1.jpg">
                        <div class="demo">
                            <b>Sức hút của vàng hồng trong ngành trang sức</b>
                            <br>
                            Vàng hồng là một trong những nguyên liệu chế tác trang sức được các quý cô ưa chuộng nhất hiện nay.Vàng hồng từ lâu đã...
                        </div>

                        <div style="clear: both;"></div>
                    </li>
                    <li>
                        <img src="assets/images/news2.jpg">
                        <div class="demo">
                            <b>Kiểu cắt Round - Bí mật của tuyệt tác kim cương</b>
                            <br>
                            Nếu đã trót say mê vẻ đẹp lấp lánh của kim cương chắc hẳn các bạn sẽ không còn xa lạ với kiểu cắt Round...
                        </div>
                        <div style="clear: both;"></div>
                    </li>
                    <li>
                        <img src="assets/images/news3.jpg">
                        <div class="demo">
                            <b>Những biểu tượng nhan sắc gắn liền với nghệ thuật kim hoàn</b>
                            <br>
                            Trang sức kim cương được sinh ra đời để giúp phụ nữ trở nên rạng rỡ và nổi bật hơn. Tuy nhiên, việc tỏa sáng...
                        </div>
                        <div style="clear: both;"></div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <?php
    require_once 'views/layouts/footer.php';
    die();
    ?>
</div>
</body>
</html>