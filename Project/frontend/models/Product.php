<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 8/2/2020
 * Time: 12:31 AM
 */
    require_once 'models/Model.php';
    class Product extends Model{

        public function getById($id){
            $sql_select_one = "SELECT * FROM products WHERE id = $id";
            $obj_select_one = $this->connection->prepare($sql_select_one);
            $obj_select_one->execute();
            $product = $obj_select_one ->fetchAll(PDO::FETCH_ASSOC);
            return $product;
        }

        public function getByCategoryId($category_id){
            $sql_select = "SELECT * FROM products WHERE category_id = $category_id";
            $obj_select = $this->connection->prepare($sql_select);
            $obj_select->execute();
            $products = $obj_select->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }

        public function getByPrice($params = []){
            $str_price = '';
            $str_category_id = $_GET['category_id'];
            if (isset($params['str_category_id'])) {
                $str_category_id = " AND " . 'category_id =' .  $_GET['category_id'] ;
            }
            if (isset($params['str_price'])) {
                $str_price = " AND " . $params['str_price'];
            }
            $sql_select_all =
                "SELECT * FROM products WHERE TRUE $str_category_id $str_price";
            $obj_select_all =
                $this->connection->prepare($sql_select_all);
            $obj_select_all->execute();
            $products = $obj_select_all
                ->fetchAll(PDO::FETCH_ASSOC);
            return $products;
        }
    }