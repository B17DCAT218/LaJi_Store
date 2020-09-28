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
    <!-- category -->
    <div class="category-sp" style="width: 300px; float: left; margin-top: 40px; margin-left: 40px;">
        <div class="row">
            <h3>GIÁ SẢN PHẨM</h3>
            <form action="" method="post">
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price">&nbsp;&nbsp;&nbsp; Dưới 500,000<sup>đ</sup></label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price"> &nbsp;&nbsp;&nbsp; 500,000<sup>đ</sup>&nbsp;1,000,000<sup>đ</sup></label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price">&nbsp;&nbsp;&nbsp; 1,000,000<sup>đ</sup>&nbsp;-&nbsp;2,000,000<sup>đ</sup></label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price">&nbsp;&nbsp;&nbsp; 2,000,000<sup>đ</sup>&nbsp;-&nbsp;3,000,000<sup>đ</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price">&nbsp;&nbsp;&nbsp; 3,000,000<sup>đ</sup>&nbsp;-&nbsp;5,000,000<sup>đ</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="price[]" id="price">
                    <label for="price">&nbsp;&nbsp;&nbsp; Trên 5,000,000<sup>đ</sup></label>
                </div>
                <input type="submit" name="filter" value="Tìm kiếm" class="btn btn-info">
            </form>
        </div>
    </div>
    <!-- end category -->
    <!-- main -->
    <div class="main">
        <div class="row" style="margin-top:40px;">
            <h2>Tất cả sản phẩm</h2>
            <div style="margin-left: 10px;">
                <select class="form-control" onchange="location.href = '/Product/Category/2?order='+this.value;">
                    <option value="0">Sắp xếp theo thứ tự</option>
                    <option value="priceAsc">Giá tăng dần</option>
                    <option value="priceDesc">Giá giảm dần</option>
                    <option value="nameAsc">Sắp xếp A-Z</option>
                    <option value="nameDesc">Sắp xếp Z-A</option>
                </select>
            </div>
        </div>
        <div class="sp">
            <div class="row">
                <?php foreach ($products as $product): ?>
                <div class="col-lg-3">
                    <img src="../backend/assets/uploads/<?php echo $product['avatar']?>">
                    <a href="index.php?controller=product&action=detail&id=<?php echo $product['id'] ?>" class="text-center"><?php echo $product['title'] ?></a>
                    <div><?php echo number_format($product['price']); ?></div>
                    <div class="action-btn">
                        <form action="cart/add" method="post" enctype="multipart/form-data" id="product-actions-1168979">
                            <a href="index.php?controller=cart&action=add&id=<?php echo $product['id'] ?>" class="button">Chọn sản phẩm</a>
                        </form>
                    </div>
                </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div style="clear: both;"></div>
    </div>
    <!-- end main -->
    <?php
    require_once 'views/layouts/footer.php';
    die();
    ?>
</div>
</body>
</html>