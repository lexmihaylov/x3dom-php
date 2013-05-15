<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Shape
 *
 * @author alexander
 */
class Shape extends X3D {
    private $transform;
    private $material;
    public function __construct() {
        
    }
    
    public function transform() {
        return $this->transform;
    }
    
    public function material() {
        return $this->material;
    }
    
    public function setTransform($transform) {
        $this->transform = $transform;
    }
    
    public function setMaterial($material) {
        $this->transform = $material;
    }
}

?>
