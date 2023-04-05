<?php
    
    function test_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $animalErr = $personErr = $countryErr = $boredErr = $toyErr = $docentErr = $moneyErr = $hobbyErr = null;
        $animal = $person = $country = $bored = $toy = $docent = $money = $hobby = null;
        echo '<style> h1{margin-top: 33.5px;} </style>';

        if (empty($_POST['animal'])) {
            $animalErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $animal = $_POST['animal'];
            test_input($animal);
        }

        if (empty($_POST['person'])) {
            $personErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $person = $_POST['person'];
            test_input($person);
        }

        if (empty($_POST['country'])) {
            $countryErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $country = $_POST['country'];
            test_input($country);
        }

        if (empty($_POST['bored'])) {
            $boredErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $bored = $_POST['bored'];
            test_input($bored);
        }

        if (empty($_POST['toy'])) {
            $toyErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $toy = $_POST['toy'];
            test_input($toy);
        }

        if (empty($_POST['docent'])) {
            $docentErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $docent = $_POST['docent'];
            test_input($docent);
        }

        if (empty($_POST['money'])) {
            $moneyErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $money = $_POST['money'];
            test_input($money);
        }

        if (empty($_POST['hobby'])) {
            $hobbyErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $hobby = $_POST['hobby'];
            test_input($hobby);
        }

        if(empty($animalErr) && empty($personErr) && empty($countryErr) && empty($boredErr) && empty($toyErr) && empty($docentErr) && empty($moneyErr) && empty($hobbyErr)) {
            include('paniek_success.php');
        } else {
            include('paniek.php');
        }
    }

?>