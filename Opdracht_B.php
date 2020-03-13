<?php
include("PHP_INCLUDE_B.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div class="">
      <h4> Controleer wat voor een type je in hebt gevoerd. <br> Vul hieronder in waarvan jij wilt weten wat het is en druk op Controleer</h4>
      <form method="post">
        <input class="Test" type="text" name="ControleerWhatItIs" value="">
        <input class="Test" type="submit" name="submit" value="Controleer">
      </form>

      <?php
      if (isset($_POST['submit'])) {
        if (isset($_POST['ControleerWhatItIs'])) {
          $INPUT = $_POST['ControleerWhatItIs'];
          echo ControleerAlfabetisch($INPUT);
          if (ControleerAlfabetisch($INPUT)) {
            echo "<br>";
          // controleert op kleine en grote letters (Alfabetisch)
          }
          echo ControleerNummeriek($INPUT);
          if (ControleerNummeriek($INPUT)) {
            echo "<br>";
          // controleert op cijfers (Numeriek)
          }
          echo ControleerPostCode($INPUT);
          if (ControleerPostCode($INPUT)) {
            echo "<br>";
          }
          // controleert of de ingevoerde variabele een postcode is
          echo ControleerNLMobiel($INPUT);
          if (ControleerNLMobiel($INPUT)) {
            echo "<br>";
          }
          // controleert of de ingevoerde variabele een Nederlands telefoonnummer is (+31 && 06)
          echo ControleerManVrouw($INPUT);
          if (ControleerManVrouw($INPUT)) {
            echo "<br>";
          }
          // controleert of een woord gelijk staat aan het woord "man" of "vrouw"
          echo ControleerMail($INPUT);
          if (ControleerMail($INPUT)) {
            echo "<br>";
          }
          // controleert of je een mail adres hebt ingevoerd
          echo ControleerAdres($INPUT);
          if (ControleerAdres($INPUT)){
            echo "<br>";
          }
          // controleert op adres (Alfabetisch gevolgd door numeriek)
          if (!ControleerAlfabetisch($INPUT) && !ControleerNummeriek($INPUT) && !ControleerPostCode($INPUT) &&  !ControleerNLMobiel($INPUT) && !ControleerManVrouw($INPUT) && !ControleerMail($INPUT) && !ControleerAdres($INPUT)) {
            echo "Niks gevonden... kut man! Volgende x beter.";
          }
          // controleert of alle variabele false zijn. Wanneer dit zo is komt de bovenstaande tekst naar voren
        }
      }
      ?>

    </div>
  </body>
</html>

<style media="screen">

div {
  width: 400px;
  height: 200px;
  margin: 0 auto;
  background-color: gray;
  border: 1px solid black;
  padding-left: 10px;
}

h4 {
  text-align: center;
  margin: 20px 10px 20px 10px;
}

.Test {
  position: relative;
  left: 80px;
  margin-bottom: 10px;
}

</style>
