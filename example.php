<?php
require "../vendor/autoload.php";
use App\Example;

$res = new Example();
$showSum = $res->sum(3.4, 5.9);
$showDiv = $res->div(6, 2);
$showMult = $res->mult(4.5, 8.7);
$showSubt = $res->subt(4.5, 8.7);
$showTrans = $res->trans([ [1, 2], [3, 4], [5, 6],]);
var_dump($showSum, $showDiv, $showMult, $showSubt);


