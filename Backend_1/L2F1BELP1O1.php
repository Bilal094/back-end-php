<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Date changing page</title>
</head>
<body>

    <?php
            date_default_timezone_set('Europe/Amsterdam');
            $date = date('H');

            if ($date >= "00" && $date < "06") {
                $background_image = 'img/night.png';
                $greeting = "Goede nacht! <br> Het is nu " . date("H:i") . " uur";
                echo "<h1>" . $greeting . "</h1>";
                echo '<style> body {background-image: url(' . $background_image . '); background-size: 90%; display: flex; justify-content: center; height: 100vh; margin: 0; align-items: center;} h1 {color: white; text-align: center; line-height: 1;} </style>';
            } elseif ($date >= "06" && $date < "12") {
                $background_image = 'img/morning.png';
                $greeting = "Goede morgen! <br> Het is nu " . date("H:i") . " uur";
                echo "<h1>" . $greeting . "</h1>";
                echo '<style> body {background-image: url(' . $background_image . '); background-size: 90%; display: flex; justify-content: center; height: 100vh; margin: 0; align-items: center;} h1 {color: white; text-align: center; line-height: 1;} </style>';
            } elseif ($date >= "12" && $date < "18") {
                $background_image = 'img/afternoon.png';
                $greeting = "Goede middag! <br> Het is nu " . date("H:i") . " uur";
                echo "<h1>" . $greeting . "</h1>";
                echo '<style> body {background-image: url(' . $background_image . '); background-size: 90%; display: flex; justify-content: center; height: 100vh; margin: 0; align-items: center;} h1 {color: white; text-align: center; line-height: 1;} </style>';
            } elseif ($date >= "18" && $date < "00") {
                $background_image = 'img/night.png';
                $greeting = "Goede nacht! <br> Het is nu " . date("H:i") . " uur";
                echo "<h1>" . $greeting . "</h1>";
                echo '<style> body {background-image: url(' . $background_image . '); background-size: 90%; display: flex; justify-content: center; height: 100vh; margin: 0; align-items: center;} h1 {color: white; text-align: center; line-height: 1;} </style>';
            }
    ?>

</body>
</html>