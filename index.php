<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo 5 - PHP - Les fonctions</title>
  </head>
  <body>
    <?php
    echo "<br />========> Exercice 1 <====== <br /><br />";

    function exo1()
    {
      return true;
    }
    echo exo1();

    echo "<br /><br />========> Exercice 2 <====== <br /><br />";

        function exo2($chaine1 = "Salut")
        {
          return $chaine1;
        }
        echo exo2();

        echo "<br /><br />========> Exercice 3 <====== <br /><br />";

        function exo3($ch1 = "Salut", $ch2= " les Simploniens")
        {
          return $ch1 . $ch2;
        }
        echo exo3();

    echo "<br /><br />========> Exercice 4 <====== <br /><br />";

    function num($n1, $n2)
      {
        if ($n1 > $n2){
          return "Le premier nombre est plus grand <br />";
          } else if ($n1 < $n2){
          return "Le premier nombre est plus petit <br />";
          } else{
          return "Les deux nombres sont identiques !! ";
          }
        }
          echo num(10, 9) ;
          echo num(8, 9);
          echo num(9, 9);

      echo "<br /><br />========> Exercice 5 <====== <br /><br />";

          function concaten($num1, $ch3)
        {
          return $num1 . $ch3;
        }

          echo concaten(2, " fois plus motivé");

      echo "<br /><br />========> Exercice 6 <====== <br /><br />";

          function message($nom, $prenom, $age)
          {
            return "Bonjour $prenom $nom, tu as $age ans.";
          }
          echo message("Ruer", "Pascal", 42);

      echo "<br /><br />========> Exercice 7 <====== <br /><br />";

          $age1 = 17;
          $genre1 = "femme";

      function param($age1, $genre1)
      {
          if ($age1<18 && $genre1=="homme") {
          return "Vous êtes un homme et vous êtes mineur";
          }
          elseif ($age1>=18 && $genre1=="homme") {
            return "Vous êtes un homme et vous êtes majeur";
          }
          elseif ($age1<18 && $genre1=="femme") {
            return "Vous  êtes une femme et vous êtes mineure";
          }
          else{
            return "Vous êtes une femme et vous êtes majeure";
          }
      }
          echo param($age1, $genre1);


        echo "<br /><br />======== Exercice 8 <====== <br /><br />";

          function exo8($n1=15, $n2=16, $n3=17)
      {
          return $n1 + $n2 + $n3;
      }

      echo exo8();

     ?>
  </body>
</html>
