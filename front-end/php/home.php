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
        <a href="/front-end/LoginRegister/login.php"><button id="UserBtn"> LOGIN </button></a>
    </footer>
</div>

<div id="MeldenDiv">
<form action="/backend/panicPress/panicPress.php" method="post">
    <a href="../php/IncidentenInfo.php">
        <img src="../Images/MeldenBtnAccent.png" id="MeldenBtnAccent">
    <button id="MeldenBtn"> MELDEN </button></a>
</div>

</body>
</html>