<?php 
require "../../backend/php/session_manager.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>

    <link rel="stylesheet" href="../css/main.css">
    <link rel="stylesheet" href="../css/overzicht.css">

</head>

<body>

    <div id="Layout">
        <header>
            <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
        </header>
        <a href="./home.php"><button class="LoginButtons"> Terug </button></a>
        <h2> MEEST RECENTE MELDING </h2>

<?php 

for ($x = 0; $x <= 10; $x++) {
    if ($x == 3) continue;
    include "section.php";
  }?>








        <footer>
            <a href="../php/login.php"><button id="UserBtn"> <?php echo $_SESSION["login"];?> </button></a>
        </footer>
    </div>

</body>

</html>