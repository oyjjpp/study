<?php
/**
 * @desc 类的修饰符
 * @author oyj<ouyangjun92@qq.com>
 * @date 2018-03-07 15:38
 */
namespace modification;

class Base
{
    public function getName(){
        return 'modification';
    }

    final public function getAge(){
        return 12;
    }
}

class Person extends Base 
{
    public function getAge(){
    
    }
}
