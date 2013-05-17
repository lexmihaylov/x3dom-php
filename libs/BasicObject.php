<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of BasicObject
 *
 * @author alexander
 */
class BasicObject extends X3D {    
    private $transform;
    
    public function __construct() {
        parent::__construct();
        
        $this->transform = new Transform();
    }
    
    public function transform() {
        return $this->transform;
    }
    
    public function setTransform($transform) {
        $this->transform = $transform;
    }
    
    public function toX3D($template) {
        return $this->transform()->toX3D(parent::toX3D($template));
    }
    
    public static function FromFile($filename) {
        return new X3DShape($filename);
    }
}

?>
