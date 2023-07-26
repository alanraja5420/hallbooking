<?php
session_start();
include("../database/connection.php");

    if($conn===false)
    {
    die("connection error");
    }

    if($_SERVER["REQUEST_METHOD"]=="POST")
    {
    
    $name = $_POST['user'];
    $pass = $_POST['pass'];
    $sql="select * from login where username='$name' AND password='$pass'";

    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($result);

    if($row["usertype"]=="user")
    {
        header("location:..\User\Dashboard.php");
        $_SESSION['user']=$name;
    }
    elseif($row["usertype"]=="secretary")
    {
        header("location:..\Secretary\Dashboard.php");
    }
    elseif($row["usertype"]=="VP")
    {
        header("location:..\Vice\Dashboard.php");
    }
    else
    {
        echo "Username or Password do not match";
    }
}
?>