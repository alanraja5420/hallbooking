<?php
            session_start();
           if($_SESSION['user']){
         ?>
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
                <a href="#" >
                    <i class="fas fa-tachometer-alt"></i>
                    <span> Dashboard </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-user"></i>
                    <span> Profile </span>
                </a>
            </li>
            <li>
                <a href="Halls.php">
                    <i class="fas fa-chart-bar"></i>
                    <span> Halls </span>
                </a>
            </li>
            <li>
                <a href="../User/Booking.php">
                    <i class="fas fa-briefcase"></i>
                    <span> Booking </span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fas fa-star"></i>
                    <span> Status </span>
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
         <?php
            
            $name = $_SESSION['user'];
         ?>
         <p><?php echo $name?></p>
         <img src="./sjc.png" alt=""/>
       </div>
       </div> 
    </div>
 </body>

<?php
           }else{
            header("location:../login/login.php");
           }
?>


</html>