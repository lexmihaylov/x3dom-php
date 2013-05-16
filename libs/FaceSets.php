<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of IndexedFaceSets
 *
 * @author alexander
 */
class FaceSets extends X3D {
    private $points = array();
    private $faces = array();
    private $solid = true;
    public function __construct() {}
    
    public function toX3D() {
        $this->faceSetsString = '';
        $this->coordinatesString = '';
        foreach($this->faces as $face) {
            $this->faceSetsString .= implode(' ',$face). ' -1 ';
        }
        $this->faceSetsString = rtrim($this->faceSetsString, ' -1 ');
        foreach($this->points as $coordinates) {
            $this->coordinatesString .= $coordinates->toString()." ";
        }
        
        return parent::toX3D('face_sets');
    }
    
    public function setPoint($index, $coordinates) {
        $this->points[$index] = $coordinates;
    }
    
    public function setPoints(array $points) {
        $this->points = $points;
    }
    
    public function getPoint($index) {
        return $this->points[$index];
    }
    
    public function isSolid($bool) {
        $this->solid = $bool;
    }
    
    public function solid() {
        return $this->solid;
    }
    
    public function points() {
        return $this->points;
    }
    
    public function addFace($face) {
        $this->faces[] = $face;
    }
    
    public function setFaces(array $faces) {
        $this->faces = $faces;
    }
    
    public function faces() {
        return $this->faces;
    }
}

?>
