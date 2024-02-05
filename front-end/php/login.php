<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

<link rel="stylesheet" href="../css/main.css">

</head>
<body>

<div id="Layout">
    <header>
        <img src="../Images/LinssenBlue.jpeg" id="LinssenLogo">
    </header>

    <footer>
        <a href="../LoginRegister/Login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
</div>

<div class="login">
    <form action="/backend/LoginRegister/login.php" method="post">
        <label for="chk" aria-hidden="true">Login</label>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit" name="submit" value="submit" class="button">Login</button>

        
    </form>
</div>



    
</body>
</html>