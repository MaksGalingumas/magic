<?php
include "autoloader.php";
use Magicc\nfq\nfq2\Sleepwake;
use Magicc\Voke;

echo "<b> Magic voke veikimas: </b>" ."<br>";
$voke = new Voke();
echo "<br>";
echo "<b> Magic sleep, wake veikimas: </b>" ."<br>";
$sleepwake = new Sleepwake();
echo "<br>";
echo "<b> Magic set state veikimas: </b>" ."<br>";
$state = new State();
echo "<br>";
echo "<b> Magic get,set,isset,unset,toString,invoke,clone veikimas: </b>" ."<br>";
$getset = new Getset();
echo "<br>";
echo "<b> Magic debug info veikimas: </b>" ."<br>";
$debug = new Debug();
echo "<br>";
echo "<b> Magic call ir callStatic veikimas: </b>" ."<br>";
$call= new Call();
echo "<br>";
echo "<b> Magic contruct ir destruct veikimas: </b>" ."<br>";
$condes = new Condes();

?>