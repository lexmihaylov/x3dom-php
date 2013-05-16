<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PointLamp
 *
 * @author alexander
 */
class Light extends BasicObject {
    private $type;
    public function __construct($type = LightType::PointLight) {
        parent::__construct();
        
        $this->type = $type;
    }
    
    public function toX3D() {
        parent::toX3D('light');
    }
    
    public function setType($type) {
        $this->type = $type;
    }
    
    public function type() {
        return $this->type;
    }
}

?>
