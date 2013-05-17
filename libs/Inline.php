<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Inline
 *
 * @author alexander
 */
class Inline extends X3D {
    public function __construct() {
        parent::__construct();
    }
    
    public function toX3D() {
        return parent::toX3D('inline');
    }
}

?>
