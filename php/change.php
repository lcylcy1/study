<?php
$Full_Name = $_POST['Full_Name'];
$Sex = $_POST['Sex'];
$Age = $_POST['Age'];
$Brthday = $_POST['Brthday'];
$Political_Outlook = $_POST['Political_Outlook'];
$phone_number = $_POST['phone_number'];
$Home_address = $_POST['Home_address'];
$E_mail = $_POST['E_mail'];
$t = $_GET["id"];

include("conn.php");
$sql = "update student_information set Full_Name='$Full_Name',Sex='$Sex',Age='$Age',Brthday='$Brthday',Political_Outlook='$Political_Outlook',phone_number='$phone_number',Home_address='$Home_address',E_mail='$E_mail' where Student_ID=$t";
mysqli_query($conn,$sql);
//echo $sql;
if(mysqli_query($conn,$sql)){
    echo "修改成功";
}else{
    echo "修改失败";
}


?>