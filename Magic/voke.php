<?php

class voke {
    public function __invoke($length, $hidden) {
        $this->length = $length;
        $this->hidden = $hidden;
        return 'Length canged to'.' '. $this->length. 'and hidden changed to'.' '. $this->hidden;
      
    }
    
    
}

$voke = new voke(10);
echo $voke(5, TRUE);