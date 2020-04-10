<?php
 include('conn.php');


 $username=$_POST['username'];
 $password=$_POST['password'];



//判断用户名是否存在
$che=mysqli_query($conn,"select username from register where username='$username' limit 1");
if(mysqli_fetch_array($che)){
    echo "1";
    
}else{


    mysqli_query($conn,"INSERT INTO `register` ( `username`, `password`) VALUES ('$username', '$password');");
    echo "0";
    
}
?>