<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Lab 2 - Includes en require</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>

	<!-- laad hier via php je header in (vanuit je includes map) -->
  <? include('includes/header.php')?>


	<!-- laad hier via php de juiste contentpagina in (vanuit de pages map) in. Welke geselecteerd moet worden kun je uit de URL halen (URL_Params).-->
    <?php
      if (isset($_GET['subject'])) {
        $subject = $_GET['subject'];
        switch ($subject) {
          case 'python':
            include 'pages/python.php';
            break;
          case 'islam':
            include 'pages/islam.php';
            break;
          case 'marokko':
            include 'pages/marokko.php';
            break;
          case 'kickboxing':
            include 'pages/kickboxing.php';
            break;
        }
      } else {
        null;
      }
  ?>


	
	<!-- laad hier via php je footer in (vanuit je includes map)-->
  <? include('includes/footer.php')?>


</body>
</html>