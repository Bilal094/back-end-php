<?php
    
    $animalErr = $personErr = $countryErr = $boredErr = $toyErr = $docentErr = $moneyErr = $hobbyErr = null;
    $count = 0;

    if (empty($_POST['animal'])) {
        $animalErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $animal = $_POST['animal'];
        test_input($animal);
        $count += 1;
    }

    if (empty($_POST['person'])) {
        $personErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $person = $_POST['person'];
        test_input($person);
        $count += 1;
    }

    if (empty($_POST['country'])) {
        $countryErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $country = $_POST['country'];
        test_input($country);
        $count += 1;
    }

    if (empty($_POST['bored'])) {
        $boredErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $bored = $_POST['bored'];
        test_input($bored);
        $count += 1;
    }

    if (empty($_POST['toy'])) {
        $toyErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $toy = $_POST['toy'];
        test_input($toy);
        $count += 1;
    }

    if (empty($_POST['docent'])) {
        $docentErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $docent = $_POST['docent'];
        test_input($docent);
        $count += 1;
    }

    if (empty($_POST['money'])) {
        $moneyErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $money = $_POST['money'];
        test_input($money);
        $count += 1;
    }

    if (empty($_POST['hobby'])) {
        $hobbyErr = 'Required';
        echo '<script> console.log(\'Unvalid\')</script>';
    } else {
        echo '<script> console.log(\'Valid\')</script>';
        $hobby = $_POST['hobby'];
        test_input($hobby);
        $count += 1;
    }

    if ($count === 8) {
        result();
    } else {
        $count = 0;
    }

    function test_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    include('paniek.php');

    function result() {}
?>
