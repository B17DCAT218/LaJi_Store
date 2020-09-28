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
    <div class="header">
        <!-- menu-top -->
        <div class="menu-top">
            <ul>
                <li><img src="assets/images/search.jpg"></li>
                <li><a href="#">Tìm kiếm&nbsp;&nbsp;&nbsp;</a></li>
                <li><img src="assets/images/gio-hang.jpg"></li>
                <li><a href="index.php?controller=cart&action=index">Giỏ hàng(0)&nbsp;&nbsp;&nbsp;</a></li>
                <li><img src="assets/images/tk.jpg"></li>
                <li><a href="#">Tài khoản</a></li>
                <div style="clear: both;"></div>
            </ul>
        </div>
        <!-- end menu-top -->
        <!-- banner -->
        <div class="banner">
            <div>LaJi Store</div>
        </div>
        <!-- end banner -->
        <!-- menu-bot -->
        <div class="menu-bot">
            <ul class="menu">
                <li><a href="index.html">T&nbsp;R&nbsp;A&nbsp;N&nbsp;G&nbsp;&nbsp; C&nbsp;H&nbsp;Ủ</a></li>
                <li>
                    <a href="trang-sp.html">
                        B&nbsp;Ộ&nbsp;&nbsp; S&nbsp;Ư&nbsp;U&nbsp;&nbsp; T&nbsp;Ậ&nbsp;P
                    </a>
                    <ul>
                        <li><a href="index.php?controller=product&action=showCategory&category_id=5">Nhẫn</a></li>
                        <li><a href="index.php?controller=product&action=showCategory&category_id=2">Hoa tai</a></li>
                        <li><a href="index.php?controller=product&action=showCategory&category_id=3">Dây chuyền</a></li>
                        <li><a href="index.php?controller=product&action=showCategory&category_id=4">Vòng tay</a></li>
                    </ul>
                </li>
                <li><a href="index.php?controller=home&action=blog">B&nbsp;L&nbsp;O&nbsp;G</a></li>
                <li><a href="#">G&nbsp;I&nbsp;Ớ&nbsp;I&nbsp;&nbsp; T&nbsp;H&nbsp;I&nbsp;Ệ&nbsp;U</a></li>
                <div style="clear: both;"></div>
            </ul>
        </div>
        <!-- end menu-bot -->
    </div>
    <!-- end header -->
    <!-- slide -->
    <script type="text/javascript">
        //khai bao array chua danh sach duong dan anh
        var slide = new Array();
        slide[0] = "assets/images/slide.1.jpg";
        slide[1] = "assets/images/slide.2.jpg";
        slide[2] = "assets/images/slide.3.jpg";
        //khai bao n de luu vi tri anh
        var n = 0;
        setInterval(function(){
            // thay doi duong dan anh cua the html co id=slide
            document.getElementById('slide').setAttribute("src",slide[n]);
            //tang bien n
            n++;
            // neu n o vi tri anh cuoi cung thi reset n
            if (n == slide.length)
                n  = 0;
        },3000);
    </script>
    <div class="slide">
        <img src="assets//slide.1.jpg" id="slide">
    </div>
    <!-- end slide -->
    <!-- main -->
    <div class="main">
        <!-- product -->
        <div class="product">
            <ul>
                <li>
                    <a href="#"><img src="assets/images/d'oro.jpg"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/pave classica.jpg"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/trio.jpg"></a>
                </li>
                <div style="clear: both;"></div>
            </ul>
            <ul>
                <li>
                    <a href="#"><img src="assets/images/pave rose.jpg"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/bouquet.jpg"></a>
                </li>
                <li>
                    <a href="#"><img src="assets/images/duo.jpg"></a>
                </li>
                <div style="clear: both;"></div>
            </ul>
        </div>
        <!-- end product -->
        <!-- new product -->
        <div class="new-product">
            <div style="font-size: 40px; color: black;">Sản phẩm mới</div>
            <div class="row" style="text-align: center;">
                <div class="col">
                    <img src="assets/images/new-product-1.jpg">
                    <a href="#" >White Sapphire Band Ring</a>
                    <div>1,300,000<sup>đ</sup></div>
                </div>
                <div class="col">
                    <img src="assets/images/1.jpg">
                    <a href="#">White Sapphire Band Ring</a>
                    <div>760,000<sup>đ</sup></div>
                </div>
                <div class="col">
                    <img src="assets/images/White Gold Diamond Solitaire Ring.jpg">
                    <a href="#">White Gold Diamond Solitaire Ring</a>
                    <div>1,200,000<sup>đ</sup></div>
                </div>
                <div class="col">
                    <img src="assets/images/White Gold Blue Sapphire Diamond Ring.jpg">
                    <a href="#">White Gold Blue Sapphire Diamond Ring</a>
                    <div>1,000,000<sup>đ</sup></div>
                </div>
                <div class="col">
                    <img src="assets/images/Diamond Wide Band Bracelet.jpg">
                    <a href="#">Diamond Wide Band Bracelet</a>
                    <div>1,000,000<sup>đ</sup></div>
                </div>
            </div>
        </div>
    </div>
    <!-- end new product -->
    <!-- Hot product -->
    <div class="new-product">
        <div style="font-size: 40px; color: black;">Sản phẩm bán chạy</div>
        <div class="row">
            <div class="col">
                <img src="assets/images/Tri Color Gold Diamond Drop Earrings.jpg">
                <a href="#">Tris Color Gold Diamond Drop Earrings</a>
                <div>800,000<sup>đ</sup></div>
                <div><del>900,000</del><sup>đ</sup></div>
            </div>
            <div class="col">
                <img src="assets/images/White Gold Blue Sapphire Earrings.jpg">
                <a href="#">White Gold Blue Sapphire Earrings</a>
                <div>1,450,000<sup>đ</sup></div>
                <div><del>1,600,000</del><sup>đ</sup></div>
            </div>
            <div class="col">
                <img src="assets/images/White Gold Sapphire & Diamond Hoop Earrings.jpg">
                <a href="#">White Gold Sapphire & Diamond Hoop Earrings</a>
                <div>1,100,000<sup>đ</sup></div>
            </div>
            <div class="col">
                <img src="assets/images/Rose Gold Ruby and Diamond Drop Earrings.jpg">
                <a href="#">Rose Gold Ruby and Diamond Drop Earrings</a>
                <div>1,400,000<sup>đ</sup></div>
            </div>
            <div class="col">
                <img src="assets/images/Rose Gold Tanzanite and Diamond Earrings.jpg">
                <a href="#">Rose Gold Tanzanite and Diamond Earrings</a>
                <div>1,500,00<sup>đ</sup></div>
                <div><del>1,200,000</del><sup>đ</sup></div>
            </div>
        </div>
    </div>
</div>
<!-- end Hot product -->
<!-- news-->
<div class="news">
    <div style="font-size: 40px;">Bài viết mới nhất</div>
    <div class="row">
        <div class="col">
            <img src="assets/images/news1.jpg">
            <h5><a href="#" class="text-center">Sức hút của vàng hồng trong ngành trang sức</a></h5>
            <div>Vàng hồng là một trong những nguyên liệu chế tác trang sức được các quý cô ưa chuộng nhất hiện nay.Vàng hồng từ lâu đã quen thuộc và trở thành...</div>
        </div>
        <div class="col">
            <img src="assets/images/news2.jpg">
            <h5><a href="#" class="text-center">Kiểu cắt Round - Bí mật của tuyệt tác kim cương</a></h5>
            <div>Nếu đã trót say mê vẻ đẹp lấp lánh của kim cương chắc hẳn các bạn sẽ không còn xa lạ với kiểu cắt Round nổi tiếng. Nhưng bạn đã...</div>
        </div>
        <div class="col">
            <img src="assets/images/news3.jpg">
            <h5><a href="#" class="text-center">Những biểu tượng nhan sắc gắn liền với nghệ thuật kim hoàn</a></h5>
            <div>Trang sức kim cương được sinh ra đời để giúp phụ nữ trở nên rạng rỡ và nổi bật hơn. Tuy nhiên, việc tỏa sáng và nổi bật như thế...</div>
        </div>
    </div>
</div>
</div>
<!-- end news-->
<!-- intro -->
<div class="intro" style="margin-top: 40px;">
    <div class="row" style="background-color: #e8e7e5; ">
        <div class="col" style="margin-top: -30px;">
            <img src="assets/images/chungtoi.jpg">
        </div>
        <div class="col">
            <div class="gioithieu">

                <p>LaJi Store là chuỗi cửa hàng trang sức uy tín hàng đầu Việt Nam </p>
                <p>Với hơn 10 năm kinh nghiệm trong ngành trang sức và làm đẹp, LaJi tự tin đem lại sự tự tin, sang trọng cho phái đẹp</p>
                <p>Danh sách các chi nhánh của LaJi trên toàn quốc:</p>
                <p>
                    &nbsp;&nbsp;&nbsp;Hà Nội:
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store Vincom Trần Duy Hưng</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store 283 Bà Triệu</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store 318 Cầu Giấy</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store Aoen Hà Đông</p>
                </p>
                <p>
                    &nbsp;&nbsp;&nbsp;TP.Hồ Chí Minh:
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store Aoen Bình Tân</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store Vincom Center Lanmark 81	</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store 345 Củ Chi</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;- LaJi Store 05 Phan Văn Hới </p>
                </p>
            </div>
        </div>
    </div>
</div>
<!-- end intro -->
</div>
<!-- end main -->
<?php require_once 'views/layouts/footer.php'?>
</div>
</body>
</html>