<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 8/2/2020
 * Time: 9:54 AM
 */
    require_once 'controllers/Controller.php';
    require_once 'models/Product.php';

    class CartController extends Controller {
        public function add(){

            $id = $_GET['id'];
            $product_model = new Product();
            $product = $product_model->getById($id);
            $cart = [
                'name' => $product[0]['title'],
                'price' => $product[0]['price'],
                'avatar' => $product[0]['avatar'],
                'quality' => 1
            ];
//            echo "<pre>";
//            print_r($product);
//            echo "</pre>";
//            echo "<pre>";
//            print_r($cart);
//            echo "</pre>";
//            die();
            if (!isset($_SESSION['cart'])){
                $_SESSION['cart'][$id] = $cart;
            } else {
                if (!array_key_exists($id, $_SESSION['cart'])) {
                    $_SESSION['cart'][$id] = $cart;
                } else {
                    $_SESSION['cart'][$id]['quality']++;
                }

            }
            header('Location:index.php?controller=cart&action=index');
            exit();
        }

        public function index(){

            if (isset($_POST['submit'])){
                foreach($_SESSION['cart'] AS $product_id => $cart) {
                    $_SESSION['cart'][$product_id]['quality']
                        = $_POST[$product_id];
                }
                $_SESSION['success'] = 'Cập nhật giỏ hàng thành công';
            }

            $this->content = $this->render('views/carts/index.php');
            require_once 'views/layouts/main.php';
        }

        public function delete(){
            $product_id = $_GET['id'];
            unset($_SESSION['cart'][$product_id]);
            if (empty($_SESSION['cart'])) {
                unset($_SESSION['cart']);
            }
            $_SESSION['success'] = 'Xóa sản phẩm khỏi giỏ hàng thành công';
            header("Location:index.php?controller=cart&action=index");
            exit();
        }
    }