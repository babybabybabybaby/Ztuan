<?php
$mysql_username='root'; //管理员用户
$servename='localhost';//127.0.0.1
$mysql_password='';

//数据库名称
$db_name='ztuan';
$conn=new mysqli($servename,$mysql_username,$mysql_password,$db_name);//创建了一个链接的实例

// $conn->connect_error如果没有错误，则该值是null
// 如果发生错误，该值是一个字符串
if($conn->connect_error){
    echo "链接失败error:" . $conn->connect_error;
    return;
}
$conn->query("set names utf-8");