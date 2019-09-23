<?php
/**
前端控制器，入口文件功能，请求分发器
 */

//加载模型类
require 'model/Db.php';
require 'model/Model.php';
require 'model/StudentModel.php';

//判断当前url中是否有c:controller
$controller = isset($_GET['c']) ? $_GET['c'] : 'Student';
//给控制器名添加后缀
$controller .= 'Controller';

//加载控制器类
require 'controller/'.$controller.'.php';

//获取方法
$action = isset($_GET['a']) ? $_GET['a'] : 'listAll';

//实例化自定义控制器类
$stu = new $controller();

$stu->$action(); //根据学生id，默认为1






















































