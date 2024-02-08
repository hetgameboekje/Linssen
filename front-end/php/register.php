<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div id="Layout">
    <img src="../Images/LinssenBlue.jpeg" id="LinssenLogo">
</div>
<!-- php include header -->

<div class="register">
    <form action="../../backend/php/register.php" method="post">
        <label for="chk" aria-hidden="true">Register</label>
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <input type="password" name="confirm_password" placeholder="Confirm Password" required>
        <button type="submit" name="submit" value="submit" class="button">Register</button>
    </form>
</div>

</body>
</html>
