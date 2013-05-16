<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Camera
 *
 * @author alexander
 */
class Camera extends BasicObject {
    public function __construct() {
        parent::__construct();
    }
    
    public function toX3D() {
        return parent::toX3D('camera');
    }
}

?>
