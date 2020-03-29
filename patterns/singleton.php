<?php
/**
 * @desc 创建者模式——单例模式
 */
class Singleton{
    /**
     * @desc 自身实例
     */
    private static $instance;

    /**
     * @desc 
     */
    public function __clone(){
        // 禁止单例对象的clone
    }

    /**
     * @desc 获取实例
     */
    public static function getInstance(){
        if(self::$instance instanceof self){
            self::$instance = new self;
        }
        return self::$instance
    }
}