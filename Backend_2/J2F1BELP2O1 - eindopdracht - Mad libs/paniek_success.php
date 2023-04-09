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

        <h2>Er heerst paniek...</h2>
        <p>Er heerst paniek in koninkrijk <?echo $country;?>. Koning <? echo $docent;?> is ten einde raad en als Koning
        <? echo $docent;?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <? echo $person; ?>.</p>
        <p> "<? echo $person; ?>!" Het is een ramp! Het is een schande!" </p> 
        <p> "Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?" </p> 
        <p> "Mijn <? echo $animal; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <? echo $toy; ?> voor hem gekocht!" </p> 
        <p> "Majesteit, uw <? echo $animal; ?> komt vast wel vanzelf weer terug?" </p> 
        <p> "Ja. da's leuk en aardig, maar hoe moet ik in de tussentijd <? echo $hobby; ?> leren?" </p> 
        <p> "Maar Sire, daar kunt u toch uw <? echo $money; ?> voor gebruiken." </p> 
        <p> "<? echo $person; ?>, je hebt helemaal gelijk! Wat zou ik doen als ik jou niet had." </p> 
        <p> "<? echo $bored; ?>, Sire." </p> <br>

    </section>

    <footer>
        Bilal Achrifi © 2023
    </footer>

</body>
</html>