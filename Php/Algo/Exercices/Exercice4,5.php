<?php
/* Note à sois même : tenter de le refaire sans la correction*/
/*$genre= strtoupper(readline("Êtes vous un homme ou une femme ? :"));
while ($genre!= "homme" && $genre!= "femme" && $genre!= "f" && $genre!="h"){
}
if ($genre = "homme" OR $genre="f") {
$age = readline("Quel âge avez-vous :");
}   if ($age >= 20) {
echo "Vous êtes imposable";
}
else if ($genre = "femme" OR $genre="f" && $age>=18 && $age<=35){
echo "Vous êtes imposable";
}   else {
echo "Vous n'êtes pas imposable";
}*/

/*Correction de Martine*/

$age = readline("Quel âge avez vous ? :");
$genre = readline("Genre (homme/femme :)");

if (($genre == "homme" && $age > 20) || ($genre == "femme" && $age > 18 && $age < 35)) {
    echo "Vous êtes imposable";
} else {
    echo "Vous n'êtes pas imposable";
}