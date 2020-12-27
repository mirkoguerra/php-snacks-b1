<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>snack-6</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
  </head>
  <body>

    <!-- PHP Snack 6: Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde. -->
    <?php

    $db = [
            'teachers' => [
                [
                    'name' => 'Michele',
                    'lastname' => 'Papagni'
                ],
                [
                    'name' => 'Fabio',
                    'lastname' => 'Forghieri'
                ]
            ],
            'pm' => [
                [
                    'name' => 'Roberto',
                    'lastname' => 'Marazzini'
                ],
                [
                    'name' => 'Federico',
                    'lastname' => 'Pellegrini'
                ]
            ]
        ];

    ?>

    <div class="container">

      <!-- in entrambi gli ul, ciclo sull'array; se la chiave corrisponde a teachers, stampo nel primo dei due ul i li con nomi e cognomi corrispondenti; se la chiave corrisponde a pm, stampo nel secondo ul i restanti nomi e cognomi -->
      <ul class="teachers">
        <?php
          foreach ($db as $persone => $persona) {
            if ($persone == 'teachers') {
              foreach ($persona as $key) {
        ?>

        <li>
          <?php echo($key['name']." ".$key['lastname']); ?>
        </li>

        <?php
              }
            }
          }
        ?>
      </ul>

      <ul class="pm">
        <?php
          foreach ($db as $persone => $persona) {
            if ($persone == 'pm') {
              foreach ($persona as $key) {
        ?>

        <li>
          <?php echo($key['name']." ".$key['lastname']); ?>
        </li>

        <?php
              }
            }
          }
        ?>
      </ul>

    </div>

  </body>
</html>
