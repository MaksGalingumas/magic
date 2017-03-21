<?php

namespace Magic\nfq\nfq2;

class Sleepwake{
    public $length;
    public function __sleep(){
        $this->length = 0;
        return['length'];
    }
    public function __wakeup(){
        $this->length = 6;
    }
}
$v1 = new Sleepwake(10);
$s1 = serialize ($v1);
echo $s1;
$v2 = unserialize('O:9:"sleepwake":1:{s:6:"length";i:10;}');
echo "<br>";
echo $v2->length;