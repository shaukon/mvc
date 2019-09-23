<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h2 align="center">学生信息表</h2>
<table border="1" cellpadding="5" cellspacing="0" align="center" width="60%">
    <tr bgcolor="#87ceed">
        <th>ID</th>
        <th>姓名</th>
        <th>邮箱</th>
        <th>课程</th>
        <th>成绩</th>
    </tr>

    <?php foreach ($data as $stu): ?>
        <tr align="center">
            <td><?php echo $stu['Id']; ?></td>
            <td><?php echo $stu['name']; ?></td>
            <td><?php echo $stu['email']; ?></td>
            <td><?php echo $stu['course']; ?></td>
            <td><?php echo $stu['grade']; ?></td>
        </tr>
    <?php endforeach; ?>

</table>
<p align="center">共有<?php echo count($data)?>条数据</p>


</body>
</html>



































