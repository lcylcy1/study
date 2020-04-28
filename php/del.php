<?php

$del = $_POST["id"];

include('conn.php');

$sql = "delete from student_information where Student_ID=$del";
mysqli_query($conn,$sql);
if(mysqli_query($conn,$sql)){
    echo 1;
}else{
    echo 2;
}

?>