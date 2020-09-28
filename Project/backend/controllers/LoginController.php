<?php
    require_once 'controllers/Controller.php';
    require_once 'models/User.php';

    class LoginController extends Controller{

        // xu ly login
        public function login(){

            // xu ly submit
//            echo "<pre>";
//            print_r($_POST);
//            print_r($_SESSION);
//            echo "</pre>";
            if (isset($_POST['submit'])){
                $email = $_POST['email'];
                $password = $_POST['password'];
                $user_model = new User();
                $password = md5($password);
                $user = $user_model->getUserLogin($email, $password);
                var_dump($user);
                if (empty($user)){
                    $_SESSION['error'] = 'Sai email hoặc password';
                    header("Location: index.php?controller=login&action=login");
                    exit();
                } else{
                    $_SESSION['user'] = $user;
                    header("Location: index.php?controller=home&action=index");
                    exit();
                }
            }

            // lay noi dung view
            $this->content = $this->render("views/users/login.php");
            require_once 'views/layouts/main_login.php';
        }

        public function logout(){
            unset($_SESSION['user']);
            header('Location: index.php?controller=login&action=login');
        }
    }