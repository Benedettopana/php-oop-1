<?php 
  // $movie1 = new Movie('Matrix', 'Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello, mentre di notte assume la veste di hacker: sotto lo pseudonimo di "Neo" ha compiuto innumerevoli illeciti in campo informatico. Per questo motivo è sorvegliato dagli agenti Smith, Brown e Jones. I tre lo arrestano e gli viene inserita una cimice nel corpo per seguirlo.', 1999, ['azione']);

  // $movie2 = new Movie('Ritorno al futuro', 'Hill Valley, California, 25 ottobre 1985. Marty McFly è un diciassettenne studente di liceo, pigro e spesso ritardatario, ma coraggioso, gentile e di buon cuore, fidanzato con Jennifer Parker, sua coetanea e compagna di scuola. Marty sogna di diventare una rockstar ed è il chitarrista in un gruppo rock amatoriale, pur senza molta fortuna: il gruppo viene infatti bocciato al provino per suonare al ballo della scuola, perché i docenti ritengono Marty e il suo gruppo "troppo rumorosi". ', 1996, ['fantascienza']);
  
  // $movie3 = new Movie('Lo Hobbit - Un viaggio inaspettato', 'Poco prima dell\'inizio dei fatti narrati ne Il Signore degli Anelli, l\'anziano Bilbo Baggins è intento a scrivere le sue memorie nel Libro Rosso, in modo che suo nipote Frodo possa conoscere tutte le sue avventure. Nelle prime pagine del suo racconto, il vecchio hobbit comincia a narrare la storia del regno di Erebor, roccaforte del re dei nani Thrór, e delle immense ricchezze qui conservate. Il regno di Thrór vive un lungo periodo di prosperità, fino all\'arrivo del terrificante drago Smaug, il quale, invaghitosi del tesoro di Erebor, dopo aver attaccato la vicina città di Dale, che viveva di riflesso il benessere del regno dei Nani, raggiunge il regno di Thrór e lo conquista, costringendo i nani alla fuga. Quel giorno, gli elfi del Reame Boscoso decisero di non aiutare Thrór in quanto il loro re, Thranduil, non avrebbe rischiato la vita dei suoi contro l\'ira del drago. ', 1996, ['epico', 'fantastico', 'avventura']);

  $films = [
    'Matrix' => [
      'title' => 'Matrix',
      'desc' => 'Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello, mentre di notte assume la veste di hacker: sotto lo pseudonimo di "Neo" ha compiuto innumerevoli illeciti in campo informatico. Per questo motivo è sorvegliato dagli agenti Smith, Brown e Jones. I tre lo arrestano e gli viene inserita una cimice nel corpo per seguirlo.',
      'year' => 1999,
      'genre' => [
          'fantascienza',
          'azione'
        ]
      ],
    'Ritorno-al-futuro' => [
      'title' => 'Ritorno al futuro',
      'desc' => 'Hill Valley, California, 25 ottobre 1985. Marty McFly è un diciassettenne studente di liceo, pigro e spesso ritardatario, ma coraggioso, gentile e di buon cuore, fidanzato con Jennifer Parker, sua coetanea e compagna di scuola. Marty sogna di diventare una rockstar ed è il chitarrista in un gruppo rock amatoriale, pur senza molta fortuna: il gruppo viene infatti bocciato al provino per suonare al ballo della scuola, perché i docenti ritengono Marty e il suo gruppo "troppo rumorosi".',
      'year' => 1996,
      'genre' => [
          'fantascienza',
        ]
      ],
    'Lo-Hobbit-Un-viaggio-inaspettato' => [
      'title' => 'Lo Hobbit - Un viaggio inaspettato',
      'desc' => 'Poco prima dell\'inizio dei fatti narrati ne Il Signore degli Anelli, l\'anziano Bilbo Baggins è intento a scrivere le sue memorie nel Libro Rosso, in modo che suo nipote Frodo possa conoscere tutte le sue avventure. Nelle prime pagine del suo racconto, il vecchio hobbit comincia a narrare la storia del regno di Erebor, roccaforte del re dei nani Thrór, e delle immense ricchezze qui conservate. Il regno di Thrór vive un lungo periodo di prosperità, fino all\'arrivo del terrificante drago Smaug, il quale, invaghitosi del tesoro di Erebor, dopo aver attaccato la vicina città di Dale, che viveva di riflesso il benessere del regno dei Nani, raggiunge il regno di Thrór e lo conquista, costringendo i nani alla fuga. Quel giorno, gli elfi del Reame Boscoso decisero di non aiutare Thrór in quanto il loro re, Thranduil, non avrebbe rischiato la vita dei suoi contro l\'ira del drago.',
      'year' => 2012,
      'genre' => [
          'epico',
          'fantastico',
          'avventura'
        ]
      ],

  ]
?>