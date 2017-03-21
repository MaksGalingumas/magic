<?php
include "autoloader.php";
echo "<b> Magic voke veikimas: </b>" ."<br>";
$voke = new voke();
echo "<br>";
echo "<b> Magic sleep, wake veikimas: </b>" ."<br>";
$sleepwake = new sleepwake();
echo "<br>";
echo "<b> Magic set state veikimas: </b>" ."<br>";
$state = new state();
echo "<br>";
echo "<b> Magic get,set,isset,unset,toString,invoke,clone veikimas: </b>" ."<br>";
$getset = new getset();
echo "<br>";
echo "<b> Magic debug info veikimas: </b>" ."<br>";
$debug = new debug();
echo "<br>";
echo "<b> Magic call ir callStatic veikimas: </b>" ."<br>";
$call= new call();
echo "<br>";
echo "<b> Magic contruct ir destruct veikimas: </b>" ."<br>";
$condes = new condes();

?>