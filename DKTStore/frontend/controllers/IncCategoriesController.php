<?php 
	//load file model
	include_once "models/CategoriesModel.php";
	class IncCategoriesController extends Controller{
		//ke thua UserModel
		use CategoriesModel;
		public function index(){
			//goi ham de lay du lieu truyen ra view
			$data = $this->modelRead();
			//goi view
			$this->loadView("IncCategoriesView.php",["data"=>$data]);
		}
	}
 ?>