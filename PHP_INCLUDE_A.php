<?php

function BerekenSnel_PLUS(){
  $Variabele_1 = $_POST['First'];
  $Variabele_2 = $_POST['Second'];
  $FINAL = $Variabele_1 + $Variabele_2;
  return "<p class='output' >[PLUS]  - $Variabele_1 + $Variabele_2 komt neer op : $FINAL</p>";
}

function BerekenSnel_MIN(){
  $Variabele_1 = $_POST['First'];
  $Variabele_2 = $_POST['Second'];
  $FINAL = $Variabele_1 - $Variabele_2;
  return "<p class='output'>[MINUS]   - $Variabele_1 - $Variabele_2 komt neer op : $FINAL</p>";
}

function BerekenSnel_DELEN(){
  $Variabele_1 = $_POST['First'];
  $Variabele_2 = $_POST['Second'];
  $FINAL = $Variabele_1 / $Variabele_2;
  return "<p class='output'>[DELEN]     - $Variabele_1 / $Variabele_2 komt neer op : $FINAL</p>";
}

function BerekenSnel_VERMENIGVULDIGEN(){
  $Variabele_1 = $_POST['First'];
  $Variabele_2 = $_POST['Second'];
  $FINAL = $Variabele_1 * $Variabele_2;
  return "<p class='output'>[VERMENIGVULDIG]    - $Variabele_1 * $Variabele_2 komt neer op : $FINAL</p>";
}

function vermenigvuldig($aantalkeer, $getal) { //vermenigvuldigen is herhaalt optellen
if ($aantalkeer == 0) {
    return 0;
  } else if ($aantalkeer == 1) {
    return $getal;
  } else {
return vermenigvuldig($aantalkeer-1, $getal) + $getal; }
}

 ?>
