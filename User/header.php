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

    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
</head>
<body>
<div class="main--content">
        <div class="header--wrapper">
        <div class="header--title">
        <span> St.Joseph's college </span>
        <h2> Dashboard </h2>
    </div>
    <div class="user--info">
        <div class="search--info">
            
        </div>
        
        <?php
            
            $name = $_SESSION['user'];
    ?>
    <p><?php echo $name?></p>


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