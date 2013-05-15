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
    private $faceSets = array();
    private $solid = true;
    public function __construct() {}
    
    public function toX3D() {
        $this->faceSetsString = '';
        $this->coordinatesString = '';
        foreach($this->faceSets as $faceSetIndex => $coordinates) {
            $this->faceSetsString .= "{$faceSetIndex} ";
            $this->coordinatesString .= $coordinates->toString()." ";
        }
        parent::toX3D('face_sets');
    }
    
    public function set($index, $coordinates) {
        $this->faceSets[$index] = $coordinates;
    }
    
    public function get($index) {
        return $this->faceSets[$index];
    }
    
    public function isSolid($bool) {
        $this->solid = $bool;
    }
    
    public function solid() {
        return $this->solid;
    }
    
    public function getAll() {
        return $this->faceSets;
    }
}

?>
