<?php
require 'db.class.php';
$a = new db();
$arr = $a->select('piao');
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
            <td>出发地</td>
            <td>目的地</td>
            <td>票数</td>
            <td>操作</td>
        </tr>
        <?php foreach ($arr as $k => $v) {?>
        <tr>
            <td><?=$v['chufadi']?></td>
            <td><?=$v['mudidi']?></td>
            <td><?=$v['piao']?></td>
            <td>
                <a href="up.php?id=<?=$v['id']?>">抢票</a>
                <a href="del.php?id=<?=$v['id']?>">删除</a>
            </td>
        </tr>
        <?php }?>
    </table>
    <input type="submit" value="添加">
    </form>
</center>
</body>
</html>