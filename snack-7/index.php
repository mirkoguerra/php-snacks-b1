<!-- PHP Snack 7:  Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$alunni = [

  "alunno 1" => [
    "nome" => "Mirko",
    "cognome" => "Guerra",
    "voti" => [8, 9, 10]
  ],

  "alunno 2" => [
    "nome" => "Andrea",
    "cognome" => "Rossi",
    "voti" => [2, 3, 4, 5]
  ],

  "alunno 3" => [
    "nome" => "Daniele",
    "cognome" => "Bianchi",
    "voti" => [5, 9]
  ]

];

?>

<ul>
  <?php
    // ciclo su ogni studente
    foreach ($alunni as $alunno_x => $alunno) {
  ?>
  <li>
    <?php
      // stampo nome e cognome per ogni studente
      echo ("Lo studente ".$alunno['nome']." ".$alunno['cognome']." ha una media voti pari a: ");
      // inizializzo a zero la variabile che conterrà la somma dei voti di ciascuno studente
      $somma = 0;
      // ciclo su tutti i voti di ogni studente
      for ($i = 0; $i < count($alunno['voti']); $i++) {
        // sommo i voti per ogni studente
        $somma += $alunno['voti'][$i];
      }
      // inizializzo la variabile media, data dalla somma dei voti di ciascuno studente divisa per il numero di voti
      $media = $somma / count($alunno['voti']);
      // stampo la variabile media
      echo($media);
    ?>
  </li>
  <?php
    }
  ?>
</ul>
