
<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Real Madrid, futbal, štadión, Laliga">
    <meta name="author" content="Timur Molnár">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <script src="js/app.js"></script>
   <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
   
    <title>Real Madrid</title>
</head>
<body>

<?php
  $file_path = "parts/header.php"; 
  if(!include($file_path)) {
  echo"Failed to include $file_path";
  } 
?>

<!-- Základne informacie -->
<div class="main-content">
    <article class="container text-center">
      <h1>Niečo o nás</h1>
      <p>Sme fanúšikovská stránka venovaná futbalovému klubu Real Madrid. Prinášame aktuality, zaujímavosti, históriu a všetko, čo sa týka jedného z najväčších klubov na svete. Našou misiou je spájať fanúšikov a budovať komunitu ľudí, ktorých spája vášeň pre biely balet.</p>
      <h2>Základné informácie o klube Real Madrid</h2>
      <p>Klub bol založený 6. marca 1902 ako Madrid Football Club, a už od začiatku nosil na domáce zápasy biele dresy. Slovo Real je po slovensky Kráľovský, toto udelenie dostal klub od kráľa Alfonza XIII v roku 1920 spolu s kráľovskou korunou na znaku. Klub hrá domáce zápasy na štadióne Santiago Bernabéu s kapacitou 81 044 od roku 1947. Na rozdiel od väčšiny Európskych športových inštitúcii vlastnia a prevádzkujú klub členovia Realu Madrid (socios) počas celej histórie.</p>
      <p>Klub je jeden z najpodporovanejších tímov na svete.Real Madrid je jedným z troch tímov, ktoré nikdy nezostúpili z La Ligy do nižšej súťaže, spoločne s Athleticom Bilbaom a FC Barcelonou. Real Madrid má veľa dlhodobých rivalov, medzi ktorými sú najznámejší FC Barcelona, známe ako "El Clásico", spoločne s Atléticom Madrid v takzvanom "El Derbi".</p>
    </article>
      <!-- Carousel -->
       <div id="carouselExampleCaptions" class="carousel slide container">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <h3 class="text-center">Aj štadión si počas rokov prešiel rekonštrukciou</h3>
    <div class="carousel-item active">
      <img src="img/predrekonstrukciou.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Štadión pred rekonštrukciou</h5>
        <p>2018/2019</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/pocas.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Štadión počas rekonštrukcie</h5>
        <p>2021</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/porekonstrukcii.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Štadión po rekonštrukcii</h5>
        <p>2024</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
    <!-- Akordeon -->
    <!-- Najlepsia sezona -->
<?php
include_once "classes/qna.php";
use otazkyodpovede\QnA;

$qna = new QnA();

// Upozornenie: Táto funkcia zakaždým zmaže a znova naplní tabuľku. 
// V produkcii ju stačí spustiť raz a potom zakomentovať.
$qna->insertQnA(); 

// Vytiahnutie dát z databázy do premennej
$faqs = $qna->getQnA();
?>

<h2 class="text-center mt-5 mb-4">Často kladené otázky</h2>
<div class="accordion custom-accordion mx-auto" id="faqAccordion">

    <?php if (!empty($faqs)): ?>
        <?php foreach ($faqs as $index => $faq): 
            // Určíme, či ide o prvý prvok (bude otvorený)
            $isFirst = ($index === 0);
            
            // Vytvoríme unikátne ID pre každý akordeón
            $headingId = "heading" . $index;
            $collapseId = "collapse" . $index;
            
            // Tvoja pôvodná podmienka - pridať 'mb-5' na posledný element
            $isLast = ($index === count($faqs) - 1);
        ?>
            <div class="accordion-item <?php echo $isLast ? 'mb-5' : ''; ?>">
                <h2 class="accordion-header" id="<?php echo $headingId; ?>">
                    <button class="accordion-button <?php echo $isFirst ? '' : 'collapsed'; ?>" 
                            type="button" 
                            data-bs-toggle="collapse" 
                            data-bs-target="#<?php echo $collapseId; ?>" 
                            aria-expanded="<?php echo $isFirst ? 'true' : 'false'; ?>" 
                            aria-controls="<?php echo $collapseId; ?>">
                        
                        <?php echo htmlspecialchars($faq['otazka']); ?>
                        
                    </button>
                </h2>
                <div id="<?php echo $collapseId; ?>" 
                     class="accordion-collapse collapse <?php echo $isFirst ? 'show' : ''; ?>" 
                     aria-labelledby="<?php echo $headingId; ?>" 
                     data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        
                        <?php echo htmlspecialchars($faq['odpoved']); ?>
                        
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php else: ?>
        <p class="text-center">Momentálne tu nie sú žiadne otázky.</p>
    <?php endif; ?>

</div>

<!-- Footer -->
<?php
$file_path = "parts/footer.php"; 
if(!include($file_path)) {
  echo"Failed to include $file_path";
} 
?>
 <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"
    ></script>
</body>
</html>