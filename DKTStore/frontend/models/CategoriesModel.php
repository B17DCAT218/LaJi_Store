<?php 
	trait CategoriesModel{
		//lay nhieu ban ghi
		public function modelRead(){
			//goi ham de lay ket qua
			$data = DB::fetchAll("select * from categories where parent_id = 0");
			return $data;
		}
	}
 ?>