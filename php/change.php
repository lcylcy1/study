<?php

$username = $_POST["username"];
$school = $_POST['school'];
$age = $_POST['age'];
$qq = $_POST['qq'];
$job = $_POST['job'];
$t = $_GET["id"];
include("conn.php");
$sql = "update student_information set username='$username',school='$school',age='$age',qq='$qq',job='$job' where id=$t";
$_mysqli->query($sql);
//echo $sql;
if($_mysqli->query($sql)){
    echo "修改成功";
}else{
    echo "修改失败";
}


?>