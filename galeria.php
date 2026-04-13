<!DOCTYPE html>
<html lang="sk">
<head>
    <meta name="keywords" content="Real Madrid, futbal, štadión, Laliga">
    <meta name="author" content="Timur Molnár">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Real Madrid</title>
    
</head>
<body>

<?php
$file_path = "parts/header.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>

<div class="main-content">
    <!-- Galéria -->
    <section class="obrazky">
        <h1 class="nadpis">Dresy a Štadión</h1>
        <div class="gallery">
            <div class="card">
                <img src="img/dresb.jpg" alt="biely dres">
                <h3>Dres pre zápasy na domácom štadióne</h3> 
            </div>

            <div class="card">
                <img src="img/dresm.jpg" alt="modry dres">
                <h3>Dres pre zápasy u súperov</h3>
            </div>

            <div class="card">
                <img src="img/stadion.jpg" alt="stadion">
                <h3>Domáci štadión "Estadio Santiago Bernabéu"</h3>
            </div>
        </div>
    </section>

    <section class="obrazky">
    <h1 class="nadpis">Fotky z úspechov</h1>
    <div class="gallery">
        <div class="card">
            <img src="img/vyhra_UCL.webp" alt="UCL vyhra">
            <h3>Oslavy po výhre 15. champions league</h3> 
        </div>

        <div class="card">
            <img src="img/vyhra_copa.webp" alt="COPA vyhra">
            <h3>Zdvíhanie 20. trofeje Copa del Rey</h3>
        </div>

        <div class="card">
            <img src="img/vyhra_laliga.jpg" alt="LALIGA vyhra">
            <h3>Oslava už jednej z mnoha trofejí za výhru La Ligy</h3>
        </div>
    </div>
    </section>

    <section class="obrazky">
    <h1 class="nadpis">Vedenie klubu</h1>
    <div class="gallery">
        <div class="card">
            <img src="img/coach.jpg" alt="Trener Alonso">
            <h3>Xabi Alonso terajší coach klubu</h3> 
        </div>

        <div class="card">
            <img src="img/prezident.jpg" alt="Prezident Perez">
            <h3>Florentino Pérez prezident klubu</h3>
        </div>
    </div>
    </section>
</div>
<?php
$file_path = "parts/footer.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>

</body>
</html>