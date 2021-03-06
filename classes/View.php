<?php
/**
 * Created by PhpStorm.
 * User: Brick
 * Date: 15.03.15
 * Time: 16:03
 */

class View implements Iterator{

    protected $data = array();

    public function display($template){
        foreach($this as $k=>$v)
            $$k = $v;
        include $template;
    }

    public function __set($key, $value){
        $this->data[$key] = $value;
    }
    public function __get($key){
        return $this->data[$key];
    }
    public function current(){
        return current($this->data);
    }
    public function key(){
        return key($this->data);
    }
    public function next(){
        return next($this->data);
    }
    public function rewind(){
        return reset($this->data);
    }
    public function valid(){
        return false !== current($this->data);
    }

}

//$n = new View;
//$n->one ='первый';
//$n->two = 'второй';
//$n->tree = 'третий';
//$n->str = 'new string';

//foreach($n as $k=>$v)
 //   echo $k.' = > '.$v.'<br>';

