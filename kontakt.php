<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Real Madrid, futbal, štadión, Laliga">
    <meta name="author" content="Timur Molnár">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
    <title>Real Madrid</title>
</head>
<body>

<?php
$file_path = "parts/header.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>

<!-- Kontakt -->
<div class="main-content">
<form onsubmit="return validateForm()" method="post" action="db/spracovanieFormulara.php">
    <h1 class="nadpisk">Kontaktujte Nás</h1>
    <label for="name">Meno:</label>
    <input type="text" id="meno" name="meno">

    <label for="email">Email:</label>
    <input type="email" id="email" name="email">

    <label for="message">Správa</label>
    <textarea id="sprava" name="sprava"></textarea>

    <label class="gdpr">
        <input type="checkbox" id="gdpr">
        Súhlas so spracovaním osobných údajov
    </label>

    <button type="submit" class="btn">Odoslať</button>
</form>
</div>
<?php
$file_path = "parts/footer.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>
</body>
</html>