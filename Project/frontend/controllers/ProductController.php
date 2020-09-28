<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 8/2/2020
 * Time: 6:14 AM
 */
    require_once 'controllers/Controller.php';
    require_once 'Models/Product.php';
    class ProductController extends Controller{

        public function showHot(){
            $product_model = new Product();
            $products = $product_model->getHot();
            $this->content = $this->render('views/layouts/main_home.php' , [
                'products' => $products
            ]);
            require_once 'views/layouts/main_home.php';
        }
        public function showCategory(){
            $product_model = new Product();
            $products = $product_model->getByCategoryId($_GET['category_id']);
            $this->content = $this->render('views/layouts/main_sp.php' , [
                'products' =>$products
            ]);
            require_once 'views/layouts/main_sp.php';
        }

        public function search(){
                echo "<pre>";
                print_r($_POST);
                echo "</pre>";
                $params = [];

            if (isset($_POST['filter'])){
                $str_price = '';
                if (isset($_POST['price'])) {
                    foreach($_POST['price'] AS $price) {
                        switch ($price) {
                            //tích vào checkbox Dưới 1 triệu
                            case 1: $str_price .= " OR products.price < 500000";
                                break;
                            //checkbox Từ 1 - 2tr
                            case 2:
                                $str_price .= " OR (products.price BETWEEN 500000 AND 1000000)";
                                break;
                            //checkbox từ 2 - 3tr
                            case 3:
                                $str_price .= " OR (products.price BETWEEN 1000000 AND 2000000)";
                                break;
                            case 4:
                                $str_price .= " OR (products.price BETWEEN 2000000 AND 3000000)";
                                break;
                            case 5:
                                $str_price .= " OR (products.price BETWEEN 3000000 AND 5000000)";
                                break;
                            //checkbox > 3tr
                            case 6:
                                $str_price .= " OR (products.price > 5000000)";
                                break;
                        }

                    }
                    //cắt bỏ từ OR ở đầu chuỗi để tránh lỗi cú pháp SQL,
                    // sử dụng hàm substr, lấy từ ký tự thứ 3 -> hết chuỗi
                    $str_price = substr($str_price, 3);
                    $str_price = "($str_price)";
                    $params['str_price'] = $str_price;
                }
            }
            $products_model = new Product();
            $products = $products_model->getByPrice($params);
            $this->content = $this->render('views/layouts/main_sp.php' , [
                'products' => $products
            ]);
            require_once 'views/layouts/main_sp.php';
        }
    }