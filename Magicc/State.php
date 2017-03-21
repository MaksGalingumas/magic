<?php
class State{
    public $length=10;
    public function __set_state($array){
        $obj = new state ($array['length']);
        $obj->hidden = "SET STATE";
        return $obj;
    }
    
    
}

$v1 = new State();
eval('$c=' . var_export($v1, TRUE). ';');
echo $c->length;
echo $c->hidden;
