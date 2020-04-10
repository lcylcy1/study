<?php
include("conn.php");
$username=$_POST['username'];
$password=$_POST['password'];
$result = mysqli_query($conn,"select * from register where username='$username'");
if($row=mysqli_fetch_array($result)){
 
    
  
    if($row["password"]==$password){

        echo 1;

    }else{

        echo 2;//密码不正确

    }

}else{

    echo 3;//账号不正确

}