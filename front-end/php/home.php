<?php require "../../backend/php/session_manager.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/home.css">
</head>

<body>

    <div id="Layout">
        <header>
            <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
        </header>

        <footer>
            <a href="/front-end/php/login.php"><button id="UserBtn">
                    <?php echo $_SESSION["login"];?>
                </button></a>
        </footer>
    </div>

    <div id="MeldenDiv">
    <button id="MeldenBtn" onclick="e()">
        <img src="../Images/MeldenBtnAccent.png" id="MeldenBtnAccent">
        MELDEN
    </button>
</div>

</div>

    <!-- Display latitude and longitude -->




</body>

</html>