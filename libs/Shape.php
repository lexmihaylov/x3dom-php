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
    private $coordinates;
    
    public function __construct() {
        parent::__construct();
        
        $this->transform = new Transform();
        $this->material = new Material();
        $this->indexedFaceSets = new IndexedFaceSets();
        $this->coordinates = new Coordinates();
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
    
    public function coordinates() {
        return $this->coordinates;
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
    
    public function setCoordinates($coordinates) {
        $this->coordinates = $coordinates;
    }
    
    public function toX3D() {
        return $this->transform()->toX3D(parent::toX3D('shape'));
    }
}

?>
