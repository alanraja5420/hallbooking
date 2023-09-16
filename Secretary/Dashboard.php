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
                <a href="Dashboard.php" >
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

                <a href="Request.php">

                    <i class="fas fa-briefcase"></i>
                    <span> Request </span>
                </a>
            </li>
            <li>
                <a href="Status.php">
                    <i class="fas fa-star"></i>
                    <span> Status </span>
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
            
        </div>
        <img src="../Asset/sjc.png" alt=""/>
        <?php
            
            $name = $_SESSION['user'];
    ?>
    <p class="uname"><?php echo $name?></p>


       
    </div>
    </div> 
    <div class="dash_detail">
        <h2>Approved<h2>
        <h1>2</h1>
        <a href="../Secretary/Request.php">More info</a>
    </div>
    <div class="dash_detail1">
        <h2>Approved<h2>
        <h1>2</h1>
        <a href="../Secretary/Status.php">More info</a>
    </div>
    <div class="dash_detail2">
        <h2>Rejected<h2>
        <h1>4</h1>
        <a href="../Secretary/Status.php">More info</a>
    </div>
    <div class="dash_detail3">
        <h2>Bending<h2>
        <h1>5</h1>
        <a href="../Secretary/Status.php">More info</a>
    </div>
    </div>

</body>
<?php
    }else{
            header("location:../login/login.php");
    }
?>

</html>
