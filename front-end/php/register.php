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
<div id="">
    <form id="LoginForm" method="post" action="../../backend/php/login.php">
        <input class="LoginButtons" type="text" name="username" placeholder="VOOR- / ACHTERNAAM" required>
        <input class="LoginButtons" type="password" name="password" placeholder="WACHTWOORD" required>
        <input class="LoginButtons" type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button class="LoginButtons" id="LoginBtn" type="submit" value="submit"> REGISTER </button>

    </form>   
    <a href="./login.php"><button class="LoginButtons" class="center"> LOGIN </button></a>
</div>

</body>
</html>
