
<?php 

    $name = $email = '';
    $nameErr = $emailErr = '';
    $nameBool = false;
    $emailBool = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            $nameErr = 'Naam is verplicht';
        } else {
            $name = test_input($_POST['name']);
            $nameBool = true;
        }

        if (empty($_POST['email'])) {
            $emailErr = 'Email is verplicht';
        } elseif (strpos($_POST["email"], '@') === false && strpos($_POST["email"], '.') === false) {
            $emailErr = 'Email is niet geldig';
        } else {
            $email = test_input($_POST['email']);
            $emailBool = true;
        }
    }

    if ($nameBool && $emailBool === true) {
        echo '<div>';
        echo '<script>console.log(\'Valid Name\');</script>';
        echo "<h1>Ingevulde gegevens zijn</h1>";
        echo "Naam: " . $name . " <br>";
        echo "Email: ". $email;
        echo '</div>';
    }

    function test_input($formData) {
        $formData = trim($formData);
        $formData = stripslashes($formData);
        $formData = htmlspecialchars($formData);
        return $formData;
    }
    
?>

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
        <input type="text" name="name"> <br>
        <span><?php if (isset($nameErr)) echo $nameErr; ?></span> <br> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br>
        <span><?php if (isset($emailErr)) echo $emailErr; ?></span> <br> <br>
        
        <input type="submit" value="Verzend" name="submit"> 

    </form>
    </div>
</body>
</html>