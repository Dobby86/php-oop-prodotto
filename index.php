<!DOCTYPE html>

<html lang="it" dir="ltr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">

        <title>php-opp-prodotto</title>

    </head>
    <body>
    <?php

      class Amazon {

          public $articoli;

      }
      $giocattoli = new Amazon();
      $giocattoli -> marca = "Giochi preziosi";
      $giocattoli -> quantita = "n *9999" ;

      $scarpe = new Amazon();
      $scarpe -> marca = "Nike";
       $scarpe -> tessuto = "di pelle";



      echo $giocattoli -> marca . "<br> "  ;
      echo $giocattoli -> quantita . "<br> " ;
      //
      echo $scarpe -> marca . "<br> ";
       echo $scarpe -> tessuto . "<br> ";





     ?>
     <script src="main.js" charset="utf-8"></script>

    </body>
</html>
