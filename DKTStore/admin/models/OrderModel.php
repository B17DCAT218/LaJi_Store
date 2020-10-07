<?php 
	trait OrderModel{
		//lay danh sach cac ban ghi: tu ban ghi nao den ban ghi nao
		public function listOrder($from, $pageSize){
			//thuc thi truy van
			$query = DB::fetchAll("select *,orders.id as orderID from orders inner join customers on orders.customer_id=customers.id order by orders.id desc limit $from, $pageSize");
			//lay tat ca ket qua tra ve
			return $query;
		}
		//tinh tong so luong ban ghi
		public function totalRecord(){
			//thuc thi truy van			
			$rows = DB::rowCount("select id from orders");
			//tra ve tong so luong ban ghi
			return $rows;
		}
		public function listProduct($id){
			//thuc thi truy van
			$query = DB::fetchAll("select * from order_details inner join products on order_details.product_id=products.id where order_details.order_id=$id");
			//tra ve tong so luong ban ghi
			return $query;
		}
		public function sentOrder($id){
			DB::execute("update orders set status=1 where id=$id");
		}
	}
 ?>