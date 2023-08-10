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
<div class="header--wrapper">
        <div class="header--title">
        <span> St.Joseph's college
        <h2> Dashboard </h2> </span>
    </div>
    <div class="user--info">
    <img src="./sjc.png" alt=""/>
        <?php
                $name = $_SESSION['user'];
            ?>
        <p class="uname"> 
            <?php echo $name ?>
        </p>
    
    </div>
    </div> 
</body>
</html>
<?php
    }else{
    header("location:../login/login.php");
    }
?>