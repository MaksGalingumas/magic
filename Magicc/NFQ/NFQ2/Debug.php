<?php

namespace Magic\nfq\nfq2;

class Debug{
    public $length=10;
    public function __debugInfo(){
        return ['length'=>$this->length];
     }
}
$bug = new Debug();
var_dump ($bug);