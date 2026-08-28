<?php
$kwh = 200;

if ($kwh <= 100){
$total = $kwh*0.5; 
echo "\no consumo fui de $kwh kwh";
echo "\no valor foi de R$ 0,50 por kWh";
echo "\no valor total foi de $total";}

if ($kwh >= 101 and $kwh <= 200){
$total = $kwh*0.7;
echo "\no consumo fui de $kwh kwh";
echo "\no valor foi de R$ 0,70 por kWh";
echo "\no valor total foi de $total";}

if ($kwh >= 201 and $kwh <= 300){
$total = $kwh*0.9;
echo "\no consumo fui de $kwh kwh";
echo "\no valor foi de R$ 0,90 por kWh";
echo "\no valor total foi de $total";}

if ($kwh >= 300){
$total = $kwh*1.1;
echo "\no consumo fui de $kwh kwh";
echo "\no valor foi de R$ 1,10 por kWh";
echo "\no valor total foi de $total";}
?>