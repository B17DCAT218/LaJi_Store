<?php
/**
 * Created by PhpStorm.
 * User: Nguyen Thi Yen
 * Date: 8/1/2020
 * Time: 9:54 PM
 */
class Controller{

    public $error;
    public $content;

    public function render($file, $variables = []){
        extract($variables);
        ob_start();
        require_once $file;
        $view = ob_get_clean();
        return $view;
    }
}