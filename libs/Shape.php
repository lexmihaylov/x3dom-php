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
    private $indexedFaceSets = null;
    private $shape = null;
    
    public function __construct($definedShape = null) {
        parent::__construct();
        
        $this->material = new Material();
        
        if($definedShape != null) {
            $this->shape = new DefinedShape($definedShape);
        } else {
            $this->indexedFaceSets = new FaceSets();
        }
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
    
    public function setShape($definedShape) {
        $this->shape = new DefinedShape($definedShape);
    }
    
    public function shape() {
        return $this->shape;
    }
    
    public function toX3D() {
        return parent::toX3D('shape');
    }
}

?>
