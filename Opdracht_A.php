<?php
  include("PHP_INCLUDE_A.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <div class="">
      <h3> Voer het 1e getal en het 2e getal in, en bereken!</h3>
      <form method="post">
        <p class="tekst"> Hoe wil je het berekenen? <br> Je hebt de volgende opties; </p>
        <input class="checkbox" type="checkbox" name="Optellen" value="Optellen">
        <label class="checkbox" for="Optellen"> optellen </label>
        <input class="checkbox" type="checkbox" name="Minus" value="Aftrekken">
        <label class="checkbox" for="Aftrekken"> Aftrekken </label>
        <input class="checkbox" type="checkbox" name="DelenDoor" value="Delendoor">
        <label class="checkbox" for="DelenDoor"> DelenDoor </label>
        <input class="checkbox" type="checkbox" name="VermenigVuldig" value="">
        <label class="checkbox" for="VermenigVuldig"> VermenigVuldigen </label>
        <input class="checkbox" type="checkbox" name="Special" value="">
        <label class="checkbox" for="Special">Le Speciale</label>
        <br>
        <br>
        <p class="tekst" > vul hieronder het 1e en 2e nummer in wat je wilt berekenen <br>
        dit wordt op de volgende manier berekend:  <strong>links</strong> -, +, /, * <strong>rechts</strong> </p>

        <input class="VARIABELEN" type="number" name="First" value="1e getal">
        <input class="VARIABELEN" type="number" name="Second" value="2e getal">

        <input class="VARIABELEN" type="submit" name="Antwoord" value="Antwoord">

      </form>

      <?php

      if (isset($_POST['Antwoord'])){
        if (isset($_POST['Optellen'])){
          echo BerekenSnel_PLUS();
        }
        if (isset($_POST['Minus'])){
          echo BerekenSnel_MIN();
        }
        if (isset($_POST['DelenDoor'])){
          echo BerekenSnel_DELEN();
        }
        if (isset($_POST['VermenigVuldig'])){
          echo BerekenSnel_VERMENIGVULDIGEN();
        }
        if (isset($_POST['Special'])) {
          echo vermenigvuldig($_POST['First'], $_POST['Second']);
        }
      }

       ?>

    </div>

  </body>
</html>

<style media="screen">

div {
  width: 700px;
  height: 425px;
  background-color: gray;
  border: 1px solid black;
  margin: 0 auto;
}

h3, .tekst {
text-align: center;
}

.checkbox {
  position: relative;
  left: 60px;
  margin-left: 10px;
}

.VARIABELEN {
  position: relative;
  left: 75px;
  margin-left: 10px;
}

.output {
  margin-left: 20px;
}

</style>
