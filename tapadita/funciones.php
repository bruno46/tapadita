<?php

$sorteo=[32,74,88,80,45,65,17,"06",95,"04",34,99,15,23,72,60,39,94,98,31,84,74,64,92,16,"00",33,91,"05",83,43,61,84,58,57,13,38,11,"07",96];

$bruno=["04","07",12,19,32,34,68,76,85,96];
$leo=["04","05","06",14,23,29,56,78,80,83];
$mariano=["04","06","07","08",11,13,22,29,33,89];
$jara=["03",20,28,34,38,46,50,75,78,92];
$cesar=["03","08",11,12,13,23,30,82,93,95];
$cesar2=["03","05","08",10,11,13,15,28,30,31];
$fernandez=["02","09",13,16,17,21,26,47,74,80];
$elbio=["00","01","04","06",18,19,22,30,42,56];
$jaime=["02","08",12,15,17,22,30,33,35,53];
$beto=["07",10,18,23,27,32,38,47,57,83];
$sergio=[17,19,27,28,32,41,47,56,72,91];


$resultado= array_intersect($bruno,$sorteo);
$resultado1= array_intersect($leo,$sorteo);
$resultado2= array_intersect($mariano,$sorteo);
$resultado3= array_intersect($jara,$sorteo);
$resultado4= array_intersect($cesar,$sorteo);
$resultado5= array_intersect($cesar2,$sorteo);
$resultado6= array_intersect($fernandez,$sorteo);
$resultado7= array_intersect($elbio,$sorteo);
$resultado8= array_intersect($jaime,$sorteo);
$resultado9= array_intersect($beto,$sorteo);
$resultado10= array_intersect($sergio,$sorteo);

$resultadod= array_diff($bruno,$sorteo);
$resultadod1= array_diff($leo,$sorteo);
$resultadod2= array_diff($mariano,$sorteo);
$resultadod3= array_diff($jara,$sorteo);
$resultadod4= array_diff($cesar,$sorteo);
$resultadod5= array_diff($cesar2,$sorteo);
$resultadod6= array_diff($fernandez,$sorteo);
$resultadod7= array_diff($elbio,$sorteo);
$resultadod8= array_diff($jaime,$sorteo);
$resultadod9= array_diff($beto,$sorteo);
$resultadod10= array_diff($sergio,$sorteo);




?>