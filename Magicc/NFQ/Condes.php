<?php

class Condes{
    public $title;
    
    public function __construct($title) {
        $this->title = $title;
    }
    public function __destruct() {
        throw new Exception('Sunaikintas');
    }
}

try{
    $magic = new Condes('MesMylimNFQ');
    echo $magic->title;
    unset ($magic);
    echo '<br>';
}catch(Exception $e){
    print_r($e);
}