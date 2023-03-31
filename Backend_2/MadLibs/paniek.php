<?php

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $animalErr = '';
    if (empty($_POST['animal'])) {
        $animalErr = 'test';
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Mad libs</title>
</head>
<body>
    
    <h1>
        MadLibs
    </h1>

    <section>

        <nav>
            <li><a href="paniek.php">Er heerst paniek...</a></li>
            <li><a href="onkunde.php">Onkunde</a></li>
        </nav>

        <h2>Er heerst paniek...</h2>
        <form action="<?php htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        
            <label for="animal">Welk dier zou je nooit als huisdier willen hebben?</label> 
            <span><?php if (isset($animalErr)) echo $animalErr; ?></span>
            <input type="text" name="animal"> 

            <label for="person">Wie is de belangrijkste persoon in je leven?</label>
            <input type="text" name="person">

            <label for="country">In welk land zou je graag willen wonen?</label>
            <input type="text" name="country">

            <label for="bored">Wat doe je als je je verveelt?</label>
            <input type="text" name="bored">

            <label for="toy">Met welk speelgoed speelde je als kind het meest?</label>
            <input type="text" name="toy">

            <label for="docent">Bij welk docent spijbel je het liefst</label>
            <input type="text" name="docent">

            <label for="money">Als je € 100.000 ,- had, wat zou je dan kopen?</label>
            <input type="text" name="money">

            <label for="hobby">Wat is je favoriete bezigheid?</label>
            <input type="text" name="hobby">

            <input type="submit" name="submit" id="submit">    
        </form>

    </section>

    <footer>
        Bilal Achrifi © 2023
    </footer>
</body>
</html>