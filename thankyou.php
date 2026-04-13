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
<?php
$file_path = "parts/footer.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>
</body>
</html>