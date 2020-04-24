<?php
header("Content-Type: text/html;charset=utf-8");
 // 创建连接
$conn = mysqli_connect("localhost", "root", "root","administration") or die("连接失败");
mysqli_query($conn,"set names utf8");
// 检测连接

?>