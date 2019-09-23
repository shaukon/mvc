<?php
/**
Db类测试
 */

require 'model/Db.php';

$db = Db::getInstance(); //获取Db类实例

//更新
/*
$sql = "UPDATE student SET grade=99 WHERE id=3";
$db->exec($sql);
echo '成功更新了'.$db->num.'条记录~~';
*/

//新增
/*$create_time = time();
$update_time = time();
$sql = "INSERT student SET name='shaukon' ,email='528188125@qq.com',course='Linux',grade='99'
,create_time={$create_time},update_time={$update_time}";

$db->exec($sql);
echo '新增了'.$db->num.'条记录,'.'新增加的Id是：'.$db->insertId;*/

//删除
/*$sql = "DELETE FROM student WHERE Id=11";
$db->exec($sql);
echo '成功删除了'.$db->num.'条记录~~';*/

//查询单条
$sql = "SELECT  name,email,course,grade FROM student WHERE grade>80";
$result = $db->fetch($sql);
echo '<pre>';
print_r($result);


//查询多条
$sql = "SELECT  name,email,course,grade FROM student WHERE grade>80";
$result = $db->fetchAll($sql);
echo '<pre>';
print_r($result);




