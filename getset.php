<?php
class getset{
    protected $pasleptas = 'Default';
    public $klone = FALSE;
    
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
        $this->klone = TRUE;
    }
     
    
 
}

$setget = new getset();
$klonas = clone $setget;
echo 'setget nuklonuotas:   '. $setget->klone."<br>";
echo 'klonas nuklonuotas:   '. $klonas->klone."<br>";   




/*
$setget->pasleptas = 'Nauja paslepta verte';
$setget->pasleptas;
isset($setget->pasleptas);
unset($setget->pasleptas);
$setget->pasleptas;

echo $setget('nepasleptas');
echo $setget(5, TRUE);*/ 