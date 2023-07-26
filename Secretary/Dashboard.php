<?php
    session_start();
    if($_SESSION['user']){
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
    <div class="sidebar">
        <div class="logo"></div>
        <ul class="menu">
            <li class="active">
                <a href="#" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="Halls.php">
                    <i class="fas fa-chart-bar"></i>
                    <span> Halls </span>
                </a>
            </li>
            
                <li>

                <a href="Request1.php">

                    <i class="fas fa-briefcase"></i>
                    <span> Request </span>
                </a>
            </li>
            <li>
                <a href="Approved.php">
                    <i class="fas fa-star"></i>
                    <span> Approved </span>
                </a>
            </li>
            <li class="logout">
                <a href="../login/login.php">
                    <i class="fas fa-sign-out-alt"></i>
                    <span> Logout </span>
                </a>
            </li>
        </ul>
        
    </div>
    <div class="main--content">
        <div class="header--wrapper">
        <div class="header--title">
        <span> St.Joseph's college </span>
        <h2> Dashboard </h2>
    </div>
    <div class="user--info">
        <div class="search--info">
            <div class="sc">
            <span> Secretary </span>
            <h5> Amal <h5>
            </div>
        </div>
        <img src="../Asset/sjc.png" alt=""/>
    </div>
    </div> 
    </div>

</body>
</html>
<?php
    }else{
    header("location:../login/login.php");
    }
?>