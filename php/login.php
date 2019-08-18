<?php
include "./conn.php";
$user = $_GET['username'];
$pw = $_GET['password'];

$sql="
SELECT `id` FROM `users`
WHERE `username`='$user'AND`password`='$pw'
";

// echo $sql;
$result=$conn->query($sql);

if($result->num_rows>0){
    //登陆成功
    //使用cookie记录登陆的状态
    $usere=$result->fetch_assoc();//从result中取得了一条数据；
    $userid=$usere['id'];
    header("set-cookie:userid=$userid;path=/");
     echo '{"result":true}';

}else{
    echo '{"result":false}';
}


$conn->close();