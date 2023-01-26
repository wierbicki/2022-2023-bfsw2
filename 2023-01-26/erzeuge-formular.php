<?php

erzeugeFormular();

function erzeugeFormular() {
  echo"
  <form>
  <input type='text' placeholder='Vorname' name='vorname'>
  <input type='number' placeholder='Alter' name='alter'>
  <input type='text' placeholder='Hobbies' name='hobbies'>
  <button>Satz erzeugen</button>
  </form>";

  $vorname = $_GET["vorname"] ?? "";
  $alter = $_GET["alter"] ?? "";
  $hobbies = $_GET["hobbies"] ?? "";

  echo "Mein Name ist $vorname, ich bin $alter Jahre alt und meine Hobbies sind $hobbies"; 
}

?>
