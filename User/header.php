
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<div class="header--wrapper">
        <div class="header--title">
        <span> St.Joseph's college </span>
        <h2> Dashboard </h2>
    </div>
    <div class="user--info">
        <div class="search--box">
        </div>
        <?php
            
            $name = $_SESSION['user'];
    ?>
    <p><?php echo $name?></p>
    <img src="./sjc.png" alt=""/>
    </div>
    </div> 
</body>
</html>
