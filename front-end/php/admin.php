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
<section>
    <header>
        <a href="../php/home.php"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
    </header>

    <footer>
        <a href="../php/login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
</div>
</section>
<br>
    <section>
    <button class="LoginButtons"> Gebruiker | BHV </button><br>
    <button class="LoginButtons">datum en tijd</button>
    <button class="hoogurgent">Hoog urgent</button><br>
    <button class="LoginButtons">bericht info</button><br>
    <button class="LoginButtons">ik kom eraan</button>
    <a href="./overzicht.php"><button class="loginGreen">afhandelen</button></a><br>
    <iframe id="mapIframe" width="400px" height="300px" frameborder="0" style="border:0"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1003.7365209040916!2d5.878984324101997!3d51.00848502490363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zNTHCsDAwJzAzLjYiTiA1w7MxNyc1LjYiRQ!5e0!3m2!1sen!2suk!4v1644183037737!5m2!1sen!2suk"
        allowfullscreen="" loading="lazy"></iframe>
</section>
</body>
</html>