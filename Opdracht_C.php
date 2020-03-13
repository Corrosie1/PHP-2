<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <div>
      <h4> welk element uit de fibbonich reeks wil je naar voren toe halen?</h4>
      
    <?php
      function fibbonichi($Element_1){
        if ($Element_1 == 0) {
          return 0;
        } else if ($Element_1 == 1 || $Element_1 == 2) {
          return 1;
          // Element 1 of element 2 uit de fibbonichi reeks word teruggegeven. Dit staat beide gelijk aan 1
        } else {
          return Fibbonichi($Element_1-1) + Fibbonichi($Element_1-2);
          // Voorbeeld: Element wat opgeroepen wordt is element -- 8 --
          // 1 -  Fibbonichi 8 -1 = element 7 vd fibbonichi reeks wat gelijk staat aan 13
          // 2 -  Fibbonichi 8 -2 = element 6 vd fibbonichi reeks wat gelijk staat aan 8
          // 13 + 8 = 21
        }
      }
     ?>

     <form method="post">
       <input class="Test" type="number" name="ElementJonguh">
       <input class="Test" type="submit" name="submit" value="Kapiche">
     </form>

     <?php
     if (isset($_POST['submit'])) {
       if (isset($_POST['ElementJonguh'])) {
         $INPUT = $_POST['ElementJonguh'];
         echo Fibbonichi($INPUT);
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
