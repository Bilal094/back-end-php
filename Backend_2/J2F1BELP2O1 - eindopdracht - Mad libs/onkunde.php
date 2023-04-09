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

    <section id="parent">

        <nav>
            <li><a href="paniek.php">Er heerst paniek...</a></li>
            <li><a href="onkunde.php">Onkunde</a></li>
        </nav>

        <h2>Onkunde</h2>
        <form action="onkunde_result.php" method="post">
        
            <label for="goal">Wat zou je graag willen kunnen?</label> 
            <input type="text" name="goal"> 
            <span><?php if (isset($goalErr)) echo $goalErr; ?></span>

            <label for="person">Met welke persoon kun je goed opschieten?</label>
            <input type="text" name="person">
            <span><?php if (isset($personErr)) echo $personErr; ?></span>

            <label for="number">Wat is je favoriete getal?</label>
            <input type="text" name="number">
            <span><?php if (isset($numberErr)) echo $numberErr; ?></span>

            <label for="vacation">Wat heb je altijd bij je als je op vakantie gaat?</label>
            <input type="text" name="vacation">
            <span><?php if (isset($vacationErr)) echo $vacationErr; ?></span>

            <label for="pro">Wat is je beste persoonlijke eigenschap?</label>
            <input type="text" name="pro">
            <span><?php if (isset($proErr)) echo $proErr; ?></span>

            <label for="con">Wat is je slechtste persoonlijke eigenschap?</label>
            <input type="text" name="con">
            <span><?php if (isset($conErr)) echo $conErr; ?></span>

            <label for="worst">Wat is het ergste dat je kan overkomen?</label>
            <input type="text" name="worst">
            <span><?php if (isset($worstErr)) echo $worstErr; ?></span>

            <input type="submit" name="submit" id="submit">    
        </form>

    </section>

    <footer>
        Bilal Achrifi © 2023
    </footer>

</body>
</html>