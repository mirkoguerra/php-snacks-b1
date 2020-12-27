<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>

    <title>snack-5</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- PER LA VISUALIZZAZIONE -->

    <link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
    <!-- PER IL MIO CSS -->

  </head>
  <body>

    <!-- PHP Snack 5:  Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi <p>. Ogni punto un nuovo paragrafo. -->

    <?php

    $lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.";

    $paragrafi = explode(".", $lorem);

    ?>

    <div class="container">

      <h1>Paragrafo intero</h1>

      <p><?php echo($lorem); ?></p>

      <h1>Paragrafi ad ogni punto</h1>

      <?php
        foreach ($paragrafi as $key => $value) {
      ?>
      <p><?php echo($value) ?></p>
      <?php
        }
      ?>

    </div>

  </body>
</html>
