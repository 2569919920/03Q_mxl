<?php
header("content-type:text/html;charset=utf-8");
require 'db.class.php';
$a = new db();
$id = $_GET['id'];
$where = array("id" => $id);
$ss = $a->find('piao',$where);
$dd = $ss[0]['piao'];
if($dd > 0){
    $value = array("piao"=>$dd-1);
    $res = $a->update("piao",$value,$where);
    if($res){
        echo "<script>alert('抢票成功');location.href=\"http://localhost/ll/\"</script>";
    }else{
        echo "<script>alert('抢票失败');location.href=\"http://localhost/ll/\"</script>";
    }
}else{
    echo "<script>alert('票缺货，请稍后再试');location.href=\"http://localhost/ll/\"</script>";
}