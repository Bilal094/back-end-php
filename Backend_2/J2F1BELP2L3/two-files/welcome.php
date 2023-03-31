<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Form</title>
    <style>span {color: red;}</style>
</head>
<body>

    <div id="input">
    <form action="welcome_get.php" method="post">
        <label for="name">Naam:</label> <br>
        <input type="text" name="name"> * <br>

        <label for="email">Email:</label> <br>
        <input type="email" name="email"> * <br>
        
        <input type="submit" value="Verzend" name="submit"> 
    </form>
    </div>
    
</body>
</html>