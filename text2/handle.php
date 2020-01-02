<?php
$id=$_POST['id'];//接收前台传递的id值
require_once 'DAOPDO.class.php';
$configs=array(
    'dbname'=>'aaa'
);
$dao=DAOPDO::getSingleton($configs);
//$sql="delete from blog where id=$id";
$sql2="insert into ttt(username,password) values('木六','131313')";
//$res=$dao->query($sql);//执行的结果是布尔值 true/false
$res=$dao->query($sql2);
if($res){
    //自己拼接返回结果数组
    $arr=array(
        'code'=>1,
        'msg'=>'增加成功'
    );
    echo json_encode($arr);
}else{
    //自己拼接返回结果数组
    $arr=array(
        'code'=>0,
        'msg'=>'增加失败'
    );
    echo json_encode($arr);
}


