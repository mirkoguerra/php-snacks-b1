<!-- PHP Snack 4: Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php

// inizializzo un array vuoto
$newArray = [];

// finché l'array non è lungo 15 (da 0 a 14), genera un numero randomico compreso fra 0 e 100; se tale numero non è già presente nell'array, inseriscilo nell'array stesso
while (count($newArray) < 15) {
  $number = rand(1, 100);
  if (!in_array($number, $newArray)) {
    $newArray[] = $number;
  }
}

// var_dump($newArray);

?>

<ul>
  <?php foreach ($newArray as $element) { ?>
    <li>
      <?php echo $element; ?>
    </li>
  <?php } ?>
</ul>
