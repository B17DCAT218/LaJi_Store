<?php 
	$layout = "Layout_trangtrong.php";
 ?>
 <div class="row" style="margin-top: 30px;">
 	<div class="col-md-12">
 		<div class="panel panel-primary">
 			<div class="panel-heading">Checkout</div>
 			<div class="panel-body">
 				<form method="post" action="index.php?controller=Cart&action=doCheckout">
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-2">Name</div>
 					<div class="col-md-10"><input type="text" required name="name" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-2">Address</div>
 					<div class="col-md-10"><input type="text" required name="address" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-2">Email</div>
 					<div class="col-md-10"><input type="email" required name="email" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-2">Phone</div>
 					<div class="col-md-10"><input type="text" required name="phone" class="form-control"></div>
 				</div>
 				<div class="row" style="margin-bottom: 5px;">
 					<div class="col-md-2"></div>
 					<div class="col-md-10"><input type="submit" class="btn btn-primary" value="Thanh toán"></div>
 				</div>
 				</form>
 			</div>
 		</div>
 	</div>
 </div>