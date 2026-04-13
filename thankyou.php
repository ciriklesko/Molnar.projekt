<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Real Madrid, futbal, štadión, Laliga">
    <meta name="author" content="Timur Molnár">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Madrid</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php
$file_path = "parts/header.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>
<div class="ty">

<h1>Dakujeme za vašu správu</h1>
<img src="img/ty.png" alt="">


</div>
<footer>
    <div class="footer">
        <div>
            <p><a class="dekoracia" href="mailto:presidencia@corp.realmadrid.com">E-mail</a></p>
            <p><a class="dekoracia" href="tel:+421-950-521-324">Tel: +421 950 521 324</a></p>
        </div>
        <div>
            <p>Dátum založenia</p>
            <p>1.12.2025</p>
        </div>
        <div>
            <p>Oficiálna stránka</p>
            <p><a class="tlacitko" href="https://www.realmadrid.com/en-US">Klik</a></p>
        </div>
        <div>
            <p class="copy">© 2025 Real Madrid fan web</p>
        </div>
    </div>
</footer>
</body>
</html>