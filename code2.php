<?php
$items = explode(" ",readline());
$price = explode(" ",readline());


$breads= $items[0];
$vada = $items[1]; 
$samosa = $items[2];
$breads = $breads - ($items[2] * 2);
$profit = ($samosa * $price[1]) + ($price[0] * ($breads%$vada));

echo $profit;

?>