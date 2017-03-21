<?php

class condes{
    public $length;
    
    public function __construct($length) {
        $this->length = $length;
    }
    public function __destruct() {
        
    }
    public function __sleep(){
        $this->length = 0;
        return['length'];
    }
    public function __wakeup(){
        $this->length = 6;
    }
}
/*
try{
    $v1 = new condes(10);
    $v1->length;
    unset ($v1);
    echo '<br>';
}catch(Exception $e){
    print_r($e);
}*/
$v1 = new condes(10);
$s1 = serialize ($v1);
echo $s1;
$v2 = unserialize('O:9:"sleepwake":1:{s:6:"length";i:10;}');
echo "<br>";
echo $v2->length;