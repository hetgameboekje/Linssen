<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<link rel="stylesheet" href="../css/main.css">
<link rel="stylesheet" href="../css/login.css">

</head>
<body>

<div id="Layout">
    <header>
        <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
    </header>

    <footer>
        <a href="../front-end/php/login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
</div>

<div id="Login">
<form action="../backend/php/login.php" method="post">
    <input class="LoginButtons" type="text" placeholder="VOOR- / ACHTERNAAM" required>
    <input class="LoginButtons" type="password" placeholder="WACHTWOORD" required>
    <button class="LoginButtons" id="LoginBtn" type="submit" value="submit"> LOGIN </button>
    <button class="LoginButtons" id="RegisterBtn" type="submit" value="submit"> REGISTER </button>
</form>
    
</div>

</body>
</html>