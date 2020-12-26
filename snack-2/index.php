<!-- PHP Snack 2:
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che:
1. name sia più lungo di 3 caratteri,
2. che mail contenga un punto e una chiocciola
3. e che age sia un numero.
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” -->

<?php

// per rendere possibile l'interazione con l'utente
$name = $_GET["name"];
$mail = $_GET["mail"];
$age = $_GET["age"];
// per verificare la presenza del punto e della chiocciola nella mail
$mail_punto = ( strpos($mail, ".") !== false );
$mail_chiocciola = ( strpos($mail, "@") !== false );

// parte logica
if ( strlen($name) > 3 &&  $mail_punto == true && $mail_chiocciola == true && is_numeric($age) ) {
  echo "accesso riuscito";
} else {
    echo "accesso negato";
}

?>
