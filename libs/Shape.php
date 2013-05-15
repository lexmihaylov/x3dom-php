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
    private $indexedFaceSets;
    
    public function __construct() {
        parent::__construct();
        
        $this->transform = new Transform();
        $this->material = new Material();
        $this->indexedFaceSets = new FaceSets();
    }
    
    public function transform() {
        return $this->transform;
    }
    
    public function material() {
        return $this->material;
    }
    
    public function indexedFaceSets() {
        return $this->indexedFaceSets;
    }
    
    public function setTransform($transform) {
        $this->transform = $transform;
    }
    
    public function setMaterial($material) {
        $this->transform = $material;
    }
    
    public function setIndexedFaceSets($indexedFaceSets) {
        $this->indexedFaceSets = $indexedFaceSets;
    }
    
    public function toX3D() {
        return $this->transform()->toX3D(parent::toX3D('shape'));
    }
}

?>
