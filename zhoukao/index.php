<?php
require 'db.class.php';
$a = new db();
$arr = $a->select('zhoukao1');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<center>
    <form action="add.php" method="post">
    <table border="1">
        <tr>
            <td>标题</td>
            <td>分类</td>
            <td>描述</td>
            <td>操作</td>
        </tr>
        <?php foreach ($arr as $k => $v) {?>
        <tr>
            <td><?=$v['name']?></td>
            <td><?=$v['fenlei']?></td>
            <td><?=$v['miaoshu']?></td>
            <td>
             <a href="del.php?id=<?=$v['id']?>">删除</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <a href="2.php">添加</a>
        </form>
</center>
</body>
</html>