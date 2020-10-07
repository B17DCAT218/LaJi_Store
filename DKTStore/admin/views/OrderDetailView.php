<?php 
    //ket thua layout1.php de load vao day
    $layout = "Layout.php";
 ?>                  
<div class="col-md-12">
    <div style="margin-bottom:5px;">
        <?php 
            // Kiem tra xem don hang da gia chua, neu chua giao thi hien thi nut xac nhan da giao  hang
            $id = isset($_GET["id"]) ? $_GET["id"] : 0;
            // lay mot ban ghi
            $check = DB::fetch("seclect status from orders where id=$id");
         ?>
         <?php if($check->status == 1): ?>
            <a href="#" class="btn btn-danger">Da giao hang</a>
        <?php else: ?>
            <a href="index.php?area=backend&controller=Order&action=sent&id=<?php echo $id; ?>" class="btn btn-primary">Xác nhận đã giao hàng</a>
        <?php endif; ?>
    </div>
    <div class="panel panel-primary">
        <div class="panel-heading">Chi tiết đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Ảnh</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Số lượng</th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td style="width: 100px;"><img src="../frontend/Assets/upload/products/<?php echo $rows->photo; ?>" style="width:100px;"></td>
                    <td><?php echo $rows->name; ?></td>
                    <th><?php echo number_format($rows->price); ?></th>
                    <th><?php echo $rows->number; ?></th>
                </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>