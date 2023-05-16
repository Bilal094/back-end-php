<!-- Include the database connection -->
<? require_once('connect.php'); ?>

<?
$character = $_GET['subject'];
$stmtCharacter = $pdo->prepare('SELECT * FROM characters WHERE name = :character ');
$stmtCharacter->bindParam(':character', $character);
$stmtCharacter->execute();
$result = $stmtCharacter->fetch(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Character - Bowser </title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
<body>
<header><h1><?echo $result['name']?></h1>
    <a class="backbutton" href="index.php"><i class="fas fa-long-arrow-alt-left"></i> Terug</a></header>
<div id="container">
    <div class="detail">
        <div class="left">
            <img class="avatar" src="resources/images/<?echo $result['avatar']?>">
            <div class="stats" style="background-color: <?echo $result['color']?>">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="fas fa-heart"></i></span><?echo $result['health']?></li>
                    <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span><?echo $result['attack']?></li>
                    <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?echo $result['defense']?></li>
                </ul>
                <ul class="gear">
                    <li><b>Weapon</b>: <?echo $result['weapon']?></li>
                    <li><b>Armor</b>: <?echo $result['armor']?></li>
                </ul>
            </div>
        </div>
        <div class="right">
            <p>
                <?echo $result['bio']?>
            </p>
        </div>
        <div style="clear: both"></div>
    </div>
</div>
<footer>&copy; Bilal Achrifi 2023</footer>
</body>
</html>