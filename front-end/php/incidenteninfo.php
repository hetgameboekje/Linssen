<?php 
require "../../backend/php/session_manager.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incidenten info</title>

<link rel="stylesheet" href="../css/incidenteninfo.css">
<link rel="stylesheet" href="../css/main.css">

</head>
<body>

<div id="Layout">
    <header>
        <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
    </header>
    <!-- php include header -->

    <footer>
        <a href="../php/login.php"><button id="UserBtn"> <?php echo $_SESSION["login"];?> </button></a>
    </footer>
    <!-- php include footer -->
</div>


<a class="OngevalDiv"><button class="OngevalBtn" id="ZOBtn">ZWAAR ONGEVAL</button></a>

<a class="OngevalDiv"><button class="OngevalBtn" id="OBtn">ONGEVAL</button></a>

<div class="OngevalDiv"><textarea name="Infobox" id="InfoBox" placeholder="Verdere relevante informatie..."></textarea></div>

<a href="./overzicht.php" onclick="VerzendenConfirm()"><button id="VerzendenBtn">VERZENDEN</button></a>

<a href="#" onclick="AnnulerenConfirm()"><button id="AnnulerenBtn">ANNULEREN</button></a>
    
</body>

<script src="../js/annuleren.js"></script>
<script scr="../js/gps.js"></script>

</html>