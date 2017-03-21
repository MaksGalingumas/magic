<?php
class Getset{
    protected $pasleptas = 'Default';
    public $cloned = FALSE;
    
    public function __get($name){
        return $this->$name;
    }
    public function __set($name, $value){
        $this->$name = $value;
    }
    public function __isset($name) {
        return isset($name);
    }
    public function __unset($name){
        unset($this->$name);
    }
    public function __toString() {
        return 'To string called';  
    }
    public function __invoke($pasleptas) {
        $this->pasleptas = $pasleptas;
        return 'Pasleptas buvo pakeistas i' .' '. $this->pasleptas;
    }
    public function __clones(){
        $this->cloned = TRUE;
    }
     
    
 
}

$setget = new Getset(10);
echo $setget->pasleptas . '<br>';
echo $setget->pasleptas = 'Nauja paslepta verte';
echo "<br>";
echo isset ($setget->pasleptas);
unset($setget->pasleptas);
echo ($setget->pasleptas);
echo $setget;
echo "<br>";
echo $setget('nepasleptas');
echo "<br>";
$klonas = clone $setget;
echo "setget Cloned:   ". $setget->cloned."<br>";
echo "klonas Cloned:   ". $klonas->cloned."<br>"; 







/*
isset($setget->pasleptas);

$setget->pasleptas;

echo $setget('nepasleptas');
echo $setget(5, TRUE);*/ 