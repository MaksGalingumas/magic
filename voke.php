<?php

class voke {
    public function __invoke($length, $hidden) {
        $this->length = $length;
        $tis->hidden = $hidden;
        return 'Length canged to'. $this->length. 'and hidden changed to'. $this->hidden;
      
    }
    
    
    
    
    
    
    
}

$voke = new voke();
echo $voke(5, TRUE);