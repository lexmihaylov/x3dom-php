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
class PointLamp extends BasicObject {
    public function __construct() {
        parent::__construct();
    }
    
    public function toX3D() {
        parent::toX3D('camera');
    }
}

?>
