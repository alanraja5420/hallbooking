<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <title> Dashboard </title>
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
                <a href="Dashboard.php" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li class="logout">
                <a href="../login/logout.php">
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
        <div class="search--box">
        <i class="fa-solid fa-search"></i>
        <input type="text" placeholder="search"/>
        </div>
        
        <img src="./sjc.png" alt=""/>
        </div>
        </div> 
        <?php
        include("Halls.php");
        
        ?>
    </div>

</body>
</html>