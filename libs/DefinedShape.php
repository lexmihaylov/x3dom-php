<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of SimpleShape
 *
 * @author alexander
 */
class DefinedShape extends X3D {
    private $type;
    
    public function __construct($type) {
        parent::__construct();
        
        $this->type = $type;
    }
    
    public function setType($type) {
        $this->type = $type;
    }
    
    public function type() {
        return $this->type;
    }
    
    public function toX3D() {
        return parent::toX3D('defined_shape');
    }
}

?>
