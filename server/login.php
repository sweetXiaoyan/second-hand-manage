<?php
header("Content-type:application/json;charset=utf-8");
$mysqli = new mysqli('localhost','root','','second-hand');
if($mysqli->connect_errno){
    die('数据库连接失败!'.$mysqli->connect_error);
}
$mysqli->set_charset('utf8');
$username = $_POST["userName"];
$pwd = $_POST["pwd"];
    $sql ="SELECT `账号` FROM `超级管理员` WHERE `账号`=\"+$username+\"";
    $mysqli_result=$mysqli->query($sql);
    $row=$mysqli_result->fetch_row();
    $user=$row['0'];
//    $password = $row['1'];
    echo $user."aa";
//    echo json_encode(array('username' =>"$user" ,'password'=>"$password"));
  /*  $sql2="select 账号 from 个人信息表 where 邮箱号='$emailLogin'limit 1";
    $mysqli_result=$mysqli->query($sql2);
    $row=$mysqli_result->fetch_row();
    $img=$row['0'];
    $_SESSION['img'] = $img;
    echo json_encode(array('nickname' =>"$nickname" ,'img'=>"$img","emailLogin"=>$emailLogin ));*/
?>