<?php
include("../database/connection.php");
    if($conn===false)
    {
    die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    $name = $_POST['user'];
    $pass = $_POST['pass'];

    $sql="select * from login where user='".$name. "' AND pass='".$pass. "'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="Botany")
    {
        header("location:..\Dashboard\index.php");
    }
    elseif($row["usertype"]=="computer")
    {
        header("location:..\staff\stafflogin.php");
    }
    else
    {
        echo "Username or Password do not match";
    }
    }
?>