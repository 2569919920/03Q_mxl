<?php
function __autoload($class)
{
	$file = $class . "db.class.php";
    if (file_exists($file)) {
      include $file;
}
}
header("content-type:text/html;charset=utf-8");
$a = $new db()

$data = array(
    'name' => $_POST['name'],
    'fenlei' => $_POST['fenlei'],
    'miaoshu' => $_POST['miaoshu'],
);
$res = $a->add('miaoshu',$data);
if($res){
    echo "alert('添加成功');location.href=\"http://localhost/ll/\"";
}else{
    echo "alert('添加失败');location.href=\"http://localhost/ll/\"";
}