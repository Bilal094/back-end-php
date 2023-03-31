<?php 

    $name = $email = '';
    $nameErr = $emailErr = '';
    $nameBool = false;
    $emailBool = false;

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST['name'])) {
            echo 'Naam is verplicht';
        } else {
            $name = test_input($_POST['name']);
            $nameBool = true;
        }

        if (empty($_POST['email'])) {
            echo 'Email is verplicht';
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