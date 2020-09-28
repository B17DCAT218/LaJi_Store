<?php

    class Controller{

        public $error;
        public $content;

        public function __construct(){
            if (!isset($_SESSION['user']) && $_GET['controller'] != 'login'){
//                $_SESSION['error'] = "Bạn chưa đăng nhập";
                header("Location: index.php?controller=login&action=login");
                exit();
            }
        }

        // lay noi dung view dong
        public function render($file, $variables = []){
            extract($variables);
            ob_start();
            require_once $file;
            $views = ob_get_clean();
            return $views;
        }
    }