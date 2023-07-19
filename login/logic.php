<?php
include("../database/connection.php");
if(isset($_POST["submit"])){
    $user=$_POST['user'];
    $pass=$_POST['pass'];
    $st=mysqli_query($conn,"select * from  login where username='$user' and password='$pass'");
    if($st->num_rows ==1){
        $_SESSION['user']=$user;
        header("location:..\Dashboard\index.php");
    }else{
        $_SESSION['alert']="invalid pass or user";
        header("location:login.php");
    }
    }
?>