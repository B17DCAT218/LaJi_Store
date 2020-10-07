<?php 
    //ket thua layout1.php de load vao day
    $layout = "Layout.php";
 ?>                  
<div class="col-md-12">    
    <div class="panel panel-primary">
        <div class="panel-heading">Danh sách đơn hàng</div>
        <div class="panel-body">
            <table class="table table-bordered table-hover">
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>Create</th>
                    <th>Status</th>
                    <th style="width:100px;"></th>
                </tr>
                <?php foreach($data as $rows): ?>
                <tr>
                    <td><?php echo $rows->name; ?></td>
                    <td><?php echo $rows->email; ?></td>
                    <td><?php echo $rows->phone; ?></td>
                    <td><?php echo $rows->address; ?></td>
                    <td><?php echo $rows->create_at; ?></td>
                    <td>
                    	<?php 
                    		if($rows->status==0)
                    			echo "Chưa giao hàng";
                    		else
                    			echo "Đã giao hàng";
                    	 ?>
                    </td>
                    <td><a href="index.php?controller=Order&action=orderDetail&id=<?php echo $rows->orderID; ?>">Chi tiết</a></td>
                </tr>
                <?php endforeach; ?>
            </table>
            <style type="text/css">
                .pagination{padding:0px; margin:0px;}
            </style>
            <ul class="pagination">
                <li class="page-item disabled">
                    <a href="#" class="page-link">Trang</a>
                </li>
                <?php for($i = 1; $i <= $numPage; $i++): ?>
                <li class="page-item">
                    <a href="index.php?controller=Order&p=<?php echo $i; ?>" class="page-link"><?php echo $i; ?></a>
                </li>
                <?php endfor; ?>
            </ul>
        </div>
    </div>
</div>