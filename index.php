<!DOCTYPE html>
<html lang="sk">
<head>
    <meta name="keywords" content="Real Madrid, futbal, štadión, Laliga">
    <meta name="author" content="Timur Molnár">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
    <title>Real Madrid</title>
</head>
<body>
    <!-- Domov celej stranky -->

<?php
$file_path = "parts/header.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>

<div class="main-content">
<!-- Baner -->
<div class="banner">
    <h1>Hala Madrid!</h1>
    <p> Fanúškovská stránka najlepšieho klubu sveta</p>
</div>

<div class="oficialna">
    <h2>Neváhajte a navštívte aj oficiálnu stránku klubu</h2>
    <a href="https://www.realmadrid.com/en-US">Klik</a>
</div>

<!-- Tabulka poslednych zapasov -->
<h3 class="nadpistb">Posledné zápasy</h3>
<table>
    <thead>
    <tr>
        <th>Súper</th>
        <th>Výsledok</th>
        <th>Dátum</th>
    </tr>
    </thead>
    <tr>
        <td>Girona</td>
        <td>1:1</td>
        <td>30.11.2025</td>
    </tr>
    <tr>
        <td>Olympiakos</td>
        <td>4:3</td>
        <td>26.11.2025</td>
    </tr>
    <tr>
        <td>Elche</td>
        <td>2:2</td>
        <td>23.11.2025</td>
    </tr>
    <tr>
        <td>Liverpool</td>
        <td>0:1</td>
        <td>9.11.2025</td>
    </tr>
    <tr>
        <td>Valencia</td>
        <td>4:0</td>
        <td>1.11.2025</td>
    </tr>
</table>
</div>

<!-- Footer -->
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


<!--  Cookies lista (Kreativny Bod) -->
<div id="cookiesBox" class="cookies-box">
    Táto stránka používa cookies.
    <button onclick="acceptCookies()">OK</button>
</div>
</body>
</html>