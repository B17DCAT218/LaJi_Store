<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 8/1/2020
 * Time: 9:54 PM
 */
    require_once 'controllers/Controller.php';
    class HomeController extends Controller{
        public function index(){

//            $this->content =
//                $this->render('views/homes/index.php', [
//                    'products' => $products
//                ]);
            require_once 'views/layouts/main_home.php';
        }

        public function blog(){
            require_once 'views/layouts/blog.php';
        }

    }