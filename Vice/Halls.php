<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!DOCTYPE html>
<html>
<head>
    <title>Seven Cards with PHP and CSS</title>
    <link rel="stylesheet" type="text/css" href="Halls.css">
</head>
<body>
    <div class="card-container">
        <?php
            // Sample data with images (you can fetch data from a database or an API)
            $cardData = [
                ['title' => 'LAWLEY HALL',  'image' => '../Asset/sjc.png'],
                ['title' => 'KP JOSEPH HALL', 'image' => '../Asset/image.jpeg'],
                ['title' => 'SAIL AUDITORIUM', 'image' => '../Asset/sjc2.jpeg'],
                ['title' => 'JUBLIE HALL', 'image' => '../Asset/sjc3.jpeg'],
                ['title' => 'MARINE HALL', 'image' => '../Asset/bac1.jpg'],
                ['title' => 'MCA SEMINAR HALL', 'image' => '../Asset/bac4.jpg'],
                ['title' => 'COMMUNITY CENTER HALL', 'image' => '../Asset/bac5.jpg'],
            ];

            // Loop through the data and create cards dynamically
            foreach ($cardData as $card) {
                echo '<div class="card">';
                echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
                echo '<h2>' . $card['title'] . '</h2>';
            
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>

</body>
</html>