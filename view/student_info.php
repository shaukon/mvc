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
        <th>字段</th>
        <th>值</th>
    </tr>
    <tr>
        <td>ID</td>
        <td><?php echo $data['Id']?></td>
    </tr>
    <tr>
        <td>姓名</td>
        <td><?php echo $data['name']?></td>
    </tr>
    <tr>
        <td>邮箱</td>
        <td><?php echo $data['email']?></td>
    </tr>
    <tr>
        <td>课程</td>
        <td><?php echo $data['course']?></td>
    </tr>
    <tr>
        <td>成绩</td>
        <td
            <?php if ($data['grade']<60){
                echo 'style="color:red"';
            }?>
        ><?php echo $data['grade']?></td>
    </tr>
</table>
<p align="center"
    <?php if ($data['grade']<60){
        echo 'style="color:red"';
    }?>
>
    <?php
        if ($data['grade']<60){
            echo "成绩不合格，需要补考呦";
        }else{
            echo "恭喜你，毕业了";
        }
    ?>
</p>

</body>
</html>