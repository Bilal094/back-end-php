<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
</head>
    <body>

    <!-- Include the database connection -->
    <? require_once('connect.php'); ?>
    <!-- Query for count of characters -->
    <?
        $stmtCount = $pdo->query('SELECT COUNT(*) FROM characters');
        $resultCount = $stmtCount->fetchColumn();
    ?>
    <header><h1>Alle <? echo $resultCount;?> characters uit de database</h1>

    </header>

        <div id="container">
        <? while($row = $stmtChar->fetch(PDO::FETCH_ASSOC)) { ?>
            <a class="item" href="character.php?subject=<?echo $row['name']?>">
                <div class="left">
                    <img class="avatar" src="resources/images/<?echo $row['avatar']?>">
                </div>
                <div class="right">
                    <h2><?echo $row['name']?></h2>
                    <div class="stats">
                        <ul class="fa-ul">
                            <li><span class="fa-li"><i class="fas fa-heart"></i></span> <?echo $row['health']?></li>
                            <li><span class="fa-li"><i class="fas fa-fist-raised"></i></span> <?echo $row['attack']?></li>
                            <li><span class="fa-li"><i class="fas fa-shield-alt"></i></span><?echo $row['defense']?></li>
                        </ul>
                    </div>
                </div>
                <div class="detailButton"><i class="fas fa-search"></i> bekijk</div>
            </a>
            <? } ?>
        </div>


    <footer>&copy; Bilal Achrifi 2023</footer>
    </body>
</html>