<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Form</title>
</head>
<body>

    <div id="input">
    <form action=<?php echo htmlspecialchars($_SERVER["PHP_SELF"]) ?> method="post">
        <label for="name">Naam:</label> <br>
        <input type="text" name="name"> <br> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br> <br>
        
        <input type="submit" value="Verzend" name="submit"> 
    </form>

    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {



            echo "<h1>Ingevulde gegevens zijn</h1>";
            echo "Naam: " . $name . " <br>";
            echo "Email: ". $email;
        }

        function test_input($formData) {
            $formData = trim($formData);
            $formData = stripslashes($formData);
            $formData = htmlspecialchars($formData);
        }
    ?>
    </div>
</body>
</html>