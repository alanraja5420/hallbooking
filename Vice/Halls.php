

<!DOCTYPE html>
<html>
<head>
        <style>
            .title{
                color:red;
            }
            .seats{
                color:purple;
            }
            .AC{
                color:purple;
            }
            .card{
                text-align: center;
            }
            .card {
            width: 100px;
            border: 1px solid #ccc;
            margin: 10px;
            padding: 10px;
            text-align: center;
            box-shadow: 0px 0px 5px #888;
            border-radius: 5px;
        }
        
        .content{
            color:blue;
            margin: 10px 0;
        }
         </style>

    <title>Seven Cards with PHP and CSS</title>
    <link rel="stylesheet" type="text/css" href="Halls.css">
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
        
</head>
<body>
<?php include "Sidebar.php"?>
<div class="main--content">
<?php include 'header.php'?>
    <div class="card-container">
        <?php
            // Sample data with images (you can fetch data from a database or an API)
            $cardData = [
                ['title' => 'LAWLEY HALL',  'image' => '../Asset/sjc.png','content' => 'THE GREAT LAWLEY HA.','seats'=>'46','AC'=>'2'],
                ['title' => 'KP JOSEPH HALL', 'image' => '../Asset/image.jpeg','content' => 'THE GREAT KP JOSEPH HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'SAIL AUDITORIUM', 'image' => '../Asset/sjc2.jpeg','content' => 'THE GREAT SAIL AUDITORIUM HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'JUBLIE HALL', 'image' => '../Asset/sjc3.jpeg','content' => 'THE GREAT JUBLIE HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'MARINE HALL', 'image' => '../Asset/bac1.jpg','content' => 'THE GREAT MARINE HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'MCA SEMINAR HALL', 'image' => '../Asset/bac4.jpg','content' => 'THE GREAT MCA SEMINAR HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'COMMUNITY CENTER HALL', 'image' => '../Asset/bac5.jpg','content' => 'THE GREAT COMMUNITY CENTER HALL.','seats'=>'46','AC'=>'2'],
                ['title' => 'BALAM HALL',  'image' => '../Asset/sjc.png','content' => 'THE GREAT BALAM HALL.','seats'=>'46','AC'=>'2'],
               
            ];
        

            // Loop through the data and create cards dynamically
            foreach ($cardData as $card) {
                echo '<div class="card">';
                echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
                echo '<h2 class="title">' . $card['title'] . '</h2>';
                echo '<p class="content"> ' .$card['content'] .'</p>';
            echo '<h2 class="seats">SEATS ' .$card['seats'] .'<h2>';
            echo '<h2 class="AC">AC ' .$card['AC'] .'</h2>';
       
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>

</body>
</html>