<?php
/**
 * Created by PhpStorm.
 * User: 52818
 * Date: 2019/9/20
 * Time: 10:42
 */
//显示数据  View 视图层
echo '<h2 align="center">学生信息表</h2>';
echo '<table border="1" cellspacing="0" cellpadding="5" align="center" width="60%">';
echo '<tr align="center" bgcolor="#87ceeb"><th>id</th><th>姓名</th><th>邮箱</th><th>课程</th><th>成绩</th></tr>';
foreach ($rows as $row){
    echo '<tr align="center">';
    echo '<td>'.$row['Id'].'</td><td>'.$row['name'].'</td><td>'.$row['email'].'</td><td>'.$row['course'].'</td><td>'.$row['grade'].'</td>';
    echo '</tr>';
}
echo '</table>';