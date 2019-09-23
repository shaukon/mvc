<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/20
 * Time: 10:42
 */
//获取数据  Model 模型层
$conn = mysqli_connect('localhost','root','root','edu');
$result = mysqli_query($conn,"SELECT * FROM student");
if ($result && mysqli_num_rows($result)>0){
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC); //rows是二维数组
}else{
    echo '<h2>没有数据返回</h2>';
}