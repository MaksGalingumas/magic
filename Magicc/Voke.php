<?php
namespace magic;
class Voke {
    public function __invoke($length, $hidden) {
        $this->length = $length;
        $this->hidden = $hidden;
        return 'Length canged to'.' '. $this->length. 'and hidden changed to'.' '. $this->hidden;
      
    }
    
    
}

$voke = new Voke(10);
echo $voke(5, TRUE);