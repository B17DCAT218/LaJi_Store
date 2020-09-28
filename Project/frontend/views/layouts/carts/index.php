<?php  require_once 'helpers/Helper.php';?>

<div class="timeline-items container">
    <h2>Giỏ hàng của bạn</h2>
        <form action="" method="post">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th width="40%">Tên sản phẩm</th>
                    <th width="12%">Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>


                    <tr>
                        <td>
                            <img class="product-avatar img-responsive"
                                 src="../backend/assets/uploads/"
                                 width="80">
                            <div class="content-product">
                                <a href=""
                                   class="content-product-a">

                                </a>
                            </div>
                        </td>
                        <td>
                            <!--  cần khéo léo đặt name cho input số lượng,
                            để khi xử lý submit form update lại giỏ hàng sẽ đơn giản hơn    -->
                            <input type="number" min="0" name=""
                                   class="product-amount form-control"
                                   value="">
                        </td>
                        <td>

                        </td>
                        <td>

                        </td>
                        <td>
                            <a class="content-product-a"
                               href="xoa-san-pham/">
                                Xóa
                            </a>
                        </td>
                    </tr>

                <tr>
                    <td colspan="5" style="text-align: right">
                        Tổng giá trị đơn hàng:
                        <span class="product-price">

                    </span>
                    </td>
                </tr>
                <tr>
                    <td colspan="5" class="product-payment">
                        <input type="submit" name="submit" value="Cập nhật lại giá" class="btn btn-info">
                        <a href="thanh-toan" class="btn btn-success">Đến trang thanh toán</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
<!--    --><?php //else: ?>
<!--        <h3>Giỏ hàng trống</h3>-->
<!--    --><?php //endif; ?>
</div>