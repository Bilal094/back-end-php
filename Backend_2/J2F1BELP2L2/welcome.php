<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Form</title>
</head>
<body>
    <div>
    <form action="welcome_get.php" method="get">
        <label for="name">Naam:</label> <br>
        <input type="text" name="name"> <br> <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email"> <br> <br>
        <button>Verzend</button>
    </form>
    </div>
</body>
</html>