<!DOCTYPE html>
  <html>

  <head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="style.css ">
    <title>multiplication</title>
  </head>

  <body>
  <mark id="php">
  <?php

use LDAP\Result;

$chiffre=6;
  
for ($i = 1; $i < 10; $i++) {
  $resultat= $i * $chiffre ; 

  echo $i ."*".$chiffre."=".$resultat."<br/>";
 
}
?>
 </mark>
  </body>

  </html>