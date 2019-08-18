<?php
include "./conn.php";
//1. 提取出页面传递来的信息(username, password,)
$user = $_POST['username'];
$pw = $_POST['password'];

// 必须通过页面点击提交按钮，才能得到上面四个的值

header('content-type:text/json');
// 2. 在数据库中验证该用户是否已被注册，如果已经被注册，返回错误信息
// $sql = "


// 3. 否则，走注册的流程(向表中添加数据)

$sql = "
        INSERT INTO `users`
        (`id`, `username`, `password`)
        VALUES
        (NULL, '$user', '$pw')
    ";


$result = $conn->query($sql);
if ($result) {
    echo'{"result":true}';
} else {

    echo'{"result":false}';
}


$conn->close();