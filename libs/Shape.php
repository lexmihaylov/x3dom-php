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
class Shape extends BasicObject {
    private $material;
    private $indexedFaceSets;
    
    public function __construct() {
        parent::__construct();
        
        $this->material = new Material();
        $this->indexedFaceSets = new FaceSets();
    }
    
    public function material() {
        return $this->material;
    }
    
    public function faceSets() {
        return $this->indexedFaceSets;
    }
    
    public function setMaterial($material) {
        $this->transform = $material;
    }
    
    public function setFaceSets($indexedFaceSets) {
        $this->indexedFaceSets = $indexedFaceSets;
    }
    
    public function toX3D() {
        return parent::toX3D('shape');
    }
}

?>
