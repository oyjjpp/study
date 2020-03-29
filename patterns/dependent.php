<?php

/**
 * @dec 依赖倒置原则
 */

 interface IDriver{
     public function driver();
 }

 /**
  * @desc 师机开车
  */
 class Driver implements IDriver{
     private $car;
     public function __construct($car){
         $this->car = $car;
     }
     /**
      * 驾驶
      */
     public function driver(){
         $this->car->run();
     }
 }

 /**
  * @desc 汽车接口
  */
 interface ICar{
     public function run();
 }

 class Benc implements ICar{
     public function run(){
         print "奔驰汽车开始run...";
     }
 }

 class BWM implements ICar{
     public function run(){
         print "宝马汽车开始run...";
     }
 }

 // 测试用例
 $car = new BWM();
 $driver = new Driver($car);
 $driver->driver();