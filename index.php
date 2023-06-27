<?php

// ex 01

$variable = 0;

while ($variable < 10) {
    echo $variable . "<br/>"; 
    $variable++; 
}
echo'<br/>';
echo'<br/>';
echo'<br/>';

//ex 02

$variable1 = 0;
$variable2 = 14; 
while ($variable1 <= 20) {
    $resultat = $variable1 * $variable2;
    echo $resultat . "<br/>"; 
    $variable1++; 
}

echo'<br/>';
echo'<br/>';
echo'<br/>';
//ex 03

$variable1 = 100;
$variable2 = 11; 

while ($variable1 > 10) {
    $resultat = $variable1 * $variable2;
    echo $resultat . "<br/>";
    $variable1--;
}

echo'<br/>';
echo'<br/>';
echo'<br/>';
//ex 04

$variable = 10;
while ($variable < 10) {
    echo $variable . "<br/>";
    $variable += $variable / 2;
}


echo'<br/>';
echo'<br/>';
echo'<br/>';
//ex 05

$i = 1;

while ($i <= 15) {
    echo "On y arrive presque <br/>";
    $i++;
}
//for ($i = 1; $i <= 15; $i++) {
 //   echo "On y arrive presque\n";
//}

echo'<br/>';
echo'<br/>';
echo'<br/>';
//ex 06

for ($i =20; $i >0; $i--) {
    echo "c'est preque bon <br/>";
}

echo'<br/>';
echo'<br/>';
echo'<br/>';
//ex 07

$i = 1;

while ($i <= 100) {
    echo "On tient le bon bout<br/>";
    $i += 15;
}

?>
