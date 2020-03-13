<?php
function ControleerAlfabetisch($Controleer){
  if (preg_match('/^[A-Za-z]+$/', $Controleer)){
  return " * De variabele die is ingevoerd bevat alleen Alfabetische letters.";
  }
};
//Controleert of alles gelijk staan aan letters
// 1 Done
function ControleerNummeriek($Controleer){
  if (preg_match('/^[0-9]+$/', $Controleer)) {
    return " * De variabele die is ingevoerd bevat alleen cijfers.";
  }
};
//Controleert of alles gelijk staat aan cijfers
// 2 Done

function ControleerPostCode($Controleer){
if (preg_match('/[0-9]{4}([a-zA-Z]){2}$/', $Controleer)){
return " * De variabele die je hebt ingegeven is een postcode";
  }
};
//Controleert of de 1e 4 karakters gelijk staan aan cijfers, daarna of de laatste 2 karakter gelijk staan aan a-zA-Z
// 3 Done

function ControleerNLMobiel($Controleer){
if (preg_match('/[06]{2}([0-9]){8}$/', $Controleer)) {
  return " * De variabele die je hebt ingevoerd is een Nederlands mobiel telefoon nummer, dit nummer begint met 06.";
  }
else if (preg_match('/[+31]{3}([0-9]{9}$)/', $Controleer)){
  return "* De variabele die je hebt ingevoerd is een Nederlands mobiel telefoon nummer, dit nummer begint met +31.";
  }
};
// Controleert of de variabele die ingegeven is een nederlands mobiel telefoonnummer is
// 4 Done

function ControleerManVrouw($Controleer){
  if (preg_match('/man|MAN/', $Controleer)) {
    return "* De variabele die je hebt ingevoerd, komt het woord man voor";
  }
  if (preg_match('/vrouw|VROUW/', $Controleer)) {
    return "* De variabele die je hebt ingevoerd, komt het woord vrouw voor";
  }
};

// kan ook als volgt worden geschreven
// if (preg_match('/man|vrouw/', $Controleer)) {
// code...
//}

// controleert of het woord "man" of "vrouw" in de variabele voorkomt
// 5 Done
function ControleerMail($Controleer){
  if (filter_var($Controleer, FILTER_VALIDATE_EMAIL)) {
      return "* $Controleer is een E-mail adres.";
  }
};
// Controleert of de variabele een mail adres is
// 6 Done

function ControleerAdres($Controleer){
  if (preg_match('/[[:alpha:]]{1,25}([ ])([0-9]{1,5}$)/', $Controleer)) {
    return "* De variabele die je hebt ingevoerd is een adres.";
  }
};

// controleert of de variabele een adres is (Alfabetisch opgevolgd door numeriek)
// 7 Done


?>
