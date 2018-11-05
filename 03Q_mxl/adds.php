<?php
function __autoload($class)
{
    // 根据类名确定文件名
    $file = $class . 'db.class.php';

    if (file_exists($file)) {
        include $file; // 引入PHP文件
    }
}

header("content-type:text/html;charset=utf-8");
$a = new db();

$data = array(
    'chufadi' => $_POST['chufadi'],
    'mudidi' => $_POST['mudidi'],
    'piao' => $_POST['piao'],
);
$res = $a->add('piao',$data);
if($res){
    echo "alert('添加成功');location.href=\"http://localhost/ll/\"";
}else{
    echo "alert('添加失败');location.href=\"http://localhost/ll/\"";
}