<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!-- Connect to database -->
  <?php
  
    // Create connection
    $host = "localhost";
    $dbname = "databank_php";
    $user = "root";
    $pass = "admin";

    try {
      $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
      echo "Verbinding mislukt: " . $e->getMessage();
    }
    
  ?>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <? include('includes/header.php')?>

	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
  <?php

    if (isset($_GET['subject'])) {
        $subject = $_GET['subject'];
        $stmt = $pdo->prepare('SELECT description, image FROM onderwerpen WHERE name = :name');
        $stmt->bindParam(':name', $subject);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($result) {
          $description = $result['description'];
          $image = $result['image'];
          include('pages/' . $subject . '.php');
        }
    } else {
      echo '<div id="indexDiv">';
      echo '<p id="index">Klik op een van de onderwerpen hierboven</p>';
      echo '</div>';
    }

    $conn = null; // close the PDO connection

  ?>

	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <? include('includes/footer.php')?>

</body>
</html>