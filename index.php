<?php
//date_default_timezone_set('Europe/Moscow');
/**/
    function autoloadNewsModel($class){
        $file = 'model/'.$class.'.php';
        if(is_readable($file)){
            require 'model/'.$class.'.php';
        }
    }
    function autoloadNewsController($class){
        $file= 'controller/'.$class.'.php';
        if(is_readable($file)){
            require'controller/'.$class.'.php';
        }
    }
    spl_autoload_register('autoloadNewsModel');
    spl_autoload_register('autoloadNewsController');

    if(isset($_GET['ctrl'])){
       // require 'model/NewsModel.php';
       // require'controller/NewsController.php';
        $str = $_GET['ctrl'];
        $arr = explode('/',$str);
        $ctrlClass = $arr[0].'Controller';
        $action = $arr[1];
        $ctrl = new $ctrlClass;
        $ctrl->action($action);
    }else{
        require'view/main.php';
    }
/*
    $ctrl = $_GET['ctrl'];
    $action = $_GET['action'];

    $ctrlClass = $ctrl.'Controller';
    $action_method = $action;

echo $ctrlClass;
echo'<br>';
echo $action;
/*
   if(!class_exists('New_1',false)){
        die('No class ');
    }


    function __autoload($class) {
        require_once 'controller/'.$class.'.php';
    }
*/
//require 'controller/NewsController.php';

//$n = new NewsController();
//$n->getAllAction();
//new test1;
//var_dump($n);

