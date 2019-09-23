<?php
/**
学生模块控制器类
 * 模块管理一般有：CURD增删改查
 * 模型根据数据表创建，控制器根据模块创建
 * 所以呢，一个控制器完成了一个模块的功能
 */

class StudentController
{
    //获取所有数据
    public function listAll(){
        //实例化模型，获取数据
        $stu = new StudentModel();
        $data = $stu->getAll();
        require "view/student_list.php"; //渲染模板
    }

    //获取单条数据
    public function info($id=1){

        $id = isset($_GET['id']) ? $_GET['id'] : $id;
        //实例化模型，获取数据
        $stu = new StudentModel();
        $data = $stu->get($id);
        require "view/student_info.php"; //渲染模板
    }

}












































