<!-- PHP Snack 3: Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '25/12/2020' => [
        [
            'title' => 'post 1',
            'author' => 'Mirko',
            'text' => 'Tanti auguri di Buon Natale'
        ],
        [
            'title' => 'post 2',
            'author' => 'Marco',
            'text' => 'Non nevica, ma è comunque Natale'
        ],
    ],
    '26/12/2020' => [
        [
            'title' => 'post 3',
            'author' => 'Stefano',
            'text' => 'Oggi è il mio onomastico, tanti auguri a me'
        ]
    ],
    '01/01/2021' => [
        [
            'title' => 'post 4',
            'author' => 'Mirko',
            'text' => "Speriamo che quest'anno non scoppino altre pandemie"
        ],
        [
            'title' => 'post 5',
            'author' => 'Marco',
            'text' => 'Condivido il contenuto del post 4, che è stato scritto dal mio amico Mirko'
        ],
        [
            'title' => 'post 6',
            'author' => 'Stefano',
            'text' => 'Buon anno a tutti'
        ]
    ],
];

// foreach ($posts as $date => $post) {
//
//   foreach ($post as $key => $value) {
//
//     echo("In data ".$date." è stato scritto il ".$value['title']." da ".$value['author']." il cui testo è: ".$value['text']);
//
//   }
//
// }

?>

<ul>
  <?php
  foreach ($posts as $date => $post) {
    foreach ($post as $key => $value) {
  ?>
  <li>
    <?php
      echo("In data ".$date." è stato scritto il ".$value['title']." da ".$value['author']." il cui testo è: ".$value['text']);
    ?>
  </li>
  <?php
    }
  }
  ?>
</ul>
