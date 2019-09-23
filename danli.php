<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/20
 * Time: 10:49
 */
class Demo{
    //1.静态私有属性，保存当前类的实例
    private static $instance = null;

    //2.构造方法私有化，禁止从外部用new 来创建类实例
    private function __construct()
    {
    }

    //3.克隆方法私有化，禁止从外部克隆来生成本类的实例
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }

    //4.因为这个方法要使用静态属性，所以必须声明为静态。
    public static function getInstance(){
        //如果不是当前类的实例，那么实例化当前类创建新实例
        if (!self::$instance instanceof self){
            self::$instance = new self();
        }

        return self::$instance;
    }

}

/*$obj1 = new Demo();
$obj2 = new Demo();
$obj3 = new Demo();
$obj4 = new Demo();
$obj5 = clone $obj4;*/

$obj1 = Demo::getInstance();
$obj2 = Demo::getInstance();
$obj3 = Demo::getInstance();
$obj4 = Demo::getInstance();
$obj5 = Demo::getInstance();

var_dump($obj1,$obj2,$obj3,$obj4,$obj5);