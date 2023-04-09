<?php
    
    function test_input($data) {
        $data = htmlspecialchars($data);
        $data = trim($data);
        $data = stripslashes($data);

        return $data;
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $goalErr = $personErr = $numberErr = $vacationErr = $proErr = $conErr = $worstErr = null;
        $goal = $person = $number = $vacation = $pro = $con = $worst = null;
        echo '<style> h1{margin-top: 33.5px;} </style>';

        if (empty($_POST['goal'])) {
            $goalErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $goal = $_POST['goal'];
            test_input($goal);
        }

        if (empty($_POST['person'])) {
            $personErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $person = $_POST['person'];
            test_input($person);
        }

        if (empty($_POST['number'])) {
            $numberErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $number = $_POST['number'];
            test_input($number);
        }

        if (empty($_POST['vacation'])) {
            $vacationErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $vacation = $_POST['vacation'];
            test_input($vacation);
        }

        if (empty($_POST['pro'])) {
            $proErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $pro = $_POST['pro'];
            test_input($pro);
        }

        if (empty($_POST['con'])) {
            $conErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $con = $_POST['con'];
            test_input($con);
        }

        if (empty($_POST['worst'])) {
            $worstErr = 'Required';
            echo '<script> console.log(\'Unvalid\')</script>';
        } else {
            echo '<script> console.log(\'Valid\')</script>';
            $worst = $_POST['worst'];
            test_input($worst);
        }

        if(empty($goalErr) && empty($personErr) && empty($numberErr) && empty($vacationErr) && empty($proErr) && empty($conErr) && empty($worstErr) && empty($hobbyErr)) {
            include('onkunde_success.php');
        } else {
            include('onkunde.php');
        }
    }

?>