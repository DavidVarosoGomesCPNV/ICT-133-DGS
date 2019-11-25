
<html>
<body>




<?php

$value = 20;
$step = 3;
$i = "";

// Technique David
/*
for ($i = 0; $i < 10; $i++){

    if ($value >= 30){
        print_r ("Le nombre vaut $value \n");
    }
    else{
        print_r( "Le nombre est trop petit ! \n");
    }
    $value +=$step;

}*/

// Strat Viking Dylan CHEH
/*
for ($i = 0; $i < 10; $i++){

    if ($value >= 30){
        echo "Le nombre vaut $value <br>";
    }
    else{
        echo "Le nombre est trop petit ! <br>";
    }
    $value +=$step;

}
*/
// Avec While

while($i < 10){
    $i++;

    if ($value >= 30){
        echo "Le nombre vaut $value <br>";
    }
    else{
        echo "Le nombre est trop petit ! <br>";
    }
    $value +=$step;


}



return 0;

?>



</body>
</html>