<?php 

require_once __DIR__ . '/Model/Movie.php';
require_once __DIR__ . '/Model/db.php';

// Creo le istanze
$myFilms = [];

foreach($films as $films){
  $film = new Movie($films['title'], $films['desc'], $films['year'], $films['genre']);
  $myFilms[] = $film;
}

// var_dump($myFilms);


// var_dump($movie1);
// var_dump($movie2);
// var_dump($movie3);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <!-- Bootstrap -->
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css' integrity='sha512-b2QcS5SsA8tZodcDtGRELiGv5SaKSk1vDHDaQRda0htPYWZ6046lr3kJ5bAAQdpV2mmA/4v0wQF9MyU6/pDIAg==' crossorigin='anonymous'/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- link css -->
  <link rel="stylesheet" href="./css/my-style.css">
  <title>php-oop-1</title>
</head>
<body>
  <div class="container my-5">
    <h1 class="text-center title my-5 ">myMovies</h1>

    <div class="row row-cols-2 ">
      <!-- Stampo dinamicamente i film -->
      <?php foreach($myFilms as $film): ?>
      <div class="col p-3 ">
        <div class="my-card m-1 p-3">
          <!-- TITOLO -->
          <h5><?php echo $film->title ?></h5>
          <!-- DESCRIZIONE -->
          <p class="my-2">
            <?php echo $film->desc ?>
          </p>
          <!-- ANNO -->
          <p class="my-2">
            <?php echo $film->year ?>
          </p>
          <!-- GENERI -->
          <p class="my-2">
            <?php foreach($film->genre as $genre): ?>
            <span class="me-3">
              <?php echo $genre ?>
            </span>
            <?php endforeach ?>
          </p>
        </div>

      </div>
      <?php endforeach ?>
    </div>
  </div>
</body>
</html>