<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60 -->

<?php

// array delle partite
$partite = [
  [
      "squadra_ospitante" => "Inter",
      "squadra_ospite"  => "Milan",
      "punti_ospitante" => 3,
      "punti_ospite" => 2
  ],
  [
    "squadra_ospitante" => "Juventus",
    "squadra_ospite"  => "Bologna",
    "punti_ospitante" => 2,
    "punti_ospite" => 1
  ],
  [
      "squadra_ospitante" => "Udinese",
      "squadra_ospite"  => "Torino",
      "punti_ospitante" => 2,
      "punti_ospite" => 0
  ]
];

// ciclo per stampare i risultati delle partite presenti nell'array
for ($i = 0; $i < count($partite); $i++) {

  echo $partite[$i]["squadra_ospitante"] . " - " . $partite[$i]["squadra_ospite"] . " | " . $partite[$i]["punti_ospitante"] . "-" . $partite[$i]["punti_ospite"] . "<br>";

}

?>
