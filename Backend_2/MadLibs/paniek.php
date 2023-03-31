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
        <form action="paniek_handling.php" method="post">
        
            <label for="animal">Welk dier zou je nooit als huisdier willen hebben?</label> 
            <input type="text" name="animal"> 
            <span><?php if (isset($animalErr)) echo $animalErr; ?></span>

            <label for="person">Wie is de belangrijkste persoon in je leven?</label>
            <input type="text" name="person">
            <span><?php if (isset($personErr)) echo $personErr; ?></span>

            <label for="country">In welk land zou je graag willen wonen?</label>
            <input type="text" name="country">
            <span><?php if (isset($countryErr)) echo $countryErr; ?></span>

            <label for="bored">Wat doe je als je je verveelt?</label>
            <input type="text" name="bored">
            <span><?php if (isset($boredErr)) echo $boredErr; ?></span>

            <label for="toy">Met welk speelgoed speelde je als kind het meest?</label>
            <input type="text" name="toy">
            <span><?php if (isset($toyErr)) echo $toyErr; ?></span>

            <label for="docent">Bij welk docent spijbel je het liefst</label>
            <input type="text" name="docent">
            <span><?php if (isset($docentErr)) echo $docentErr; ?></span>

            <label for="money">Als je € 100.000,- had, wat zou je dan kopen?</label>
            <input type="text" name="money">
            <span><?php if (isset($moneyErr)) echo $moneyErr; ?></span>

            <label for="hobby">Wat is je favoriete bezigheid?</label>
            <input type="text" name="hobby">
            <span><?php if (isset($hobbyErr)) echo $hobbyErr; ?></span>

            <input type="submit" name="submit" id="submit">    
        </form>

    </section>

    <footer>
        Bilal Achrifi © 2023
    </footer>
</body>
</html>