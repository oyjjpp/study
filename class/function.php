<?php
class Func
{
    public function test(){
        echo 'test';
    }

    public function Test1(){
        echo 'Test';
    }
}

$func = new Func();
$func->test();
var_dump(method_exists($func,'Test'));

function get_param(){
    $str = 'fu';
    $func = function() use(&$str){
        $str = "hello";
    };
    echo "<pre>";
    echo $str;
    $func("This is test");
    echo $str;
    var_dump($func instanceof Closure);
    var_dump(get_param instanceof Closure);
}
get_param();
