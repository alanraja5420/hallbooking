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
                ['title' => 'Card 1', 'content' => 'This is the content of Card 1.', 'image' => '../Asset/sjc.png'],
                ['title' => 'Card 2', 'content' => 'This is the content of Card 2.', 'image' => 'image2.jpg'],
                ['title' => 'Card 3', 'content' => 'This is the content of Card 3.', 'image' => 'image3.jpg'],
                ['title' => 'Card 4', 'content' => 'This is the content of Card 4.', 'image' => 'image4.jpg'],
                ['title' => 'Card 5', 'content' => 'This is the content of Card 5.', 'image' => 'image5.jpg'],
                ['title' => 'Card 6', 'content' => 'This is the content of Card 6.', 'image' => 'image6.jpg'],
                ['title' => 'Card 7', 'content' => 'This is the content of Card 7.', 'image' => 'image7.jpg'],
            ];

            // Loop through the data and create cards dynamically
            foreach ($cardData as $card) {
                echo '<div class="card">';
                echo '<img src="' . $card['image'] . '" alt="' . $card['title'] . '">';
                echo '<h2>' . $card['title'] . '</h2>';
                echo '<p>' . $card['content'] . '</p>';
                echo '</div>';
            }
        ?>
    </div>
</body>
</html>

</body>
</html>