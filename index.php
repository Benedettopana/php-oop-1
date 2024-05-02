<?php 

require_once __DIR__ . '/Model/Movie.php';

$movie1 = new Movie('Matrix', 'Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello, mentre di notte assume la veste di hacker: sotto lo pseudonimo di "Neo" ha compiuto innumerevoli illeciti in campo informatico. Per questo motivo è sorvegliato dagli agenti Smith, Brown e Jones. I tre lo arrestano e gli viene inserita una cimice nel corpo per seguirlo.', 1999);

$movie2 = new Movie('Ritorno al futuro', 'Hill Valley, California, 25 ottobre 1985. Marty McFly è un diciassettenne studente di liceo, pigro e spesso ritardatario, ma coraggioso, gentile e di buon cuore, fidanzato con Jennifer Parker, sua coetanea e compagna di scuola. Marty sogna di diventare una rockstar ed è il chitarrista in un gruppo rock amatoriale, pur senza molta fortuna: il gruppo viene infatti bocciato al provino per suonare al ballo della scuola, perché i docenti ritengono Marty e il suo gruppo "troppo rumorosi". ', 1996);


var_dump($movie1);
var_dump($movie2);
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
  </div>
</body>
</html>