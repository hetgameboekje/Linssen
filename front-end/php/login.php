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
        <a href="../php/login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
</div>

<div>
    <form id="LoginForm" method="post" action="../../backend/php/login.php">
        <input class="LoginButtons" type="text" name="username" placeholder="VOOR- / ACHTERNAAM" required>
        <input class="LoginButtons" type="text" name="password" placeholder="WACHTWOORD" required>
        <button class="LoginButtons" id="LoginBtn" type="submit" value="submit"> LOGIN </button>

    </form>   
    <a href="./register.php"><button class="LoginButtons" id="RegisterBtn"> REGISTER </button></a>
</div>

</body>
</html>