<?php

class Transform extends X3D {
    public function __construct() {
        parent::__construct();
    }
    
    public function toX3D($shapeString) {
        $this->shapeString = $shapeString;
        
        return parent::toX3D('transform');
    }
}

?>
