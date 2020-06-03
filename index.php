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

          public function printMe() {

              echo "I prodotti nel magazzino sono : "   .  $this -> marca .   " in quantita  come "  .  $this -> quantita . "<br>";
          }
          public function printMeDue() {

              echo "I prodotti nell altro magazzino sono : "   .  $this -> marca .   " in tessuto di "  .  $this -> tessuto . "<br>";
          }

      }




      $giocattoli = new Amazon();
      $giocattoli -> marca = "Giochi preziosi";
      $giocattoli -> quantita = "n *9999" ;
      $giocattoli -> printMe();

      $scarpe = new Amazon();
      $scarpe -> marca = "Nike";
           $scarpe -> tessuto = "pelle";
       $scarpe -> printMeDue();




      echo $giocattoli -> marca . "<br> "  ;
      echo $giocattoli -> quantita . "<br> " ;
      //
      echo $scarpe -> marca . "<br> ";
       echo $scarpe -> tessuto . "<br> ";





     ?>
     <script src="main.js" charset="utf-8"></script>

    </body>
</html>
