<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Material
 *
 * @author alexander
 */
class Material extends X3D {
    public function __construct() {
        parent::__construct();
    }
    
    public function toX3D() {
        return parent::toX3D('material');
    }
}

?>
