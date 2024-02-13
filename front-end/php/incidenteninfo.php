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

<form action="../../backend/php/incidentenpost.php" method="post">
    <div class="OngevalDiv">
        <button class="OngevalBtn" id="ZOBtn" type="button">ZWAAR ONGEVAL</button>
    </div>
    <div class="OngevalDiv">
        <button class="OngevalBtn" id="OBtn" type="button">ONGEVAL</button>
    </div>
    <div class="OngevalDiv">
        <textarea name="Infobox" id="InfoBox" placeholder="Verdere relevante informatie..."></textarea>
    </div>
    <input type="hidden" name="ongeval_type" id="ongevalType" value="">
    <button id="VerzendenBtn" type="submit">VERZENDEN</button>
    <a href="#" onclick="AnnulerenConfirm()"><button id="AnnulerenBtn" type="button">ANNULEREN</button></a>
</form>

<script>
    document.getElementById('ZOBtn').addEventListener('click', function() {
        document.getElementById('ongevalType').value = 1;
    });

    document.getElementById('OBtn').addEventListener('click', function() {
        document.getElementById('ongevalType').value = 0;
    });
</script>

    
</body>

<script src="../js/annuleren.js"></script>

</html>