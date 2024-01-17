<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template</title>

<link rel="stylesheet" href="style.css">

</head>
<body>

<div id="Layout">
    <header>
        <a href="../PanicButton"><img src="../Images/LinssenBlue.jpeg" id="LinssenLogo"></a>
    </header>
    <!-- php include header -->

    <footer>
        <a href="/front-end/LoginRegister/login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
    <!-- php include footer -->
</div>



<a class="OngevalDiv"><button class="OngevalBtn" id="ZOBtn">ZWAAR ONGEVAL</button></a>

<a class="OngevalDiv"><button class="OngevalBtn" id="OBtn">ONGEVAL</button></a>

<div class="OngevalDiv"><textarea name="Infobox" id="InfoBox" placeholder="Verdere relevante informatie..."></textarea></div>

<a><button id="VerzendenBtn">VERZENDEN</button></a>

<a href="#" onclick="AnnulerenConfirm()"><button id="AnnulerenBtn">ANNULEREN</button></a>
    
</body>

<script src="annuleren.js"></script>

</html>