<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array 
non dovrà contenere lo stesso numero più di una volta -->

<?php
$numbers=[];
for ($i=0; count($numbers)<=15; $i++){
    $random = rand(1,100);
    if(!in_array($random, $numbers)){
        $numbers[] = $random;
    }
}
 var_dump($numbers)
?>

