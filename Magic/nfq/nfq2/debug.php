<?php
class debug{
    public $length=10;
    public function __debugInfo(){
        return ['length'=>$this->length];
     }
}
$bug = new debug();
var_dump ($bug);