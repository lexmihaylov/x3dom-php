<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of X3DShape
 *
 * @author alexander
 */
class X3DShape extends BasicObject {
    private $x3dFile;
    protected $group;


    public function __construct($filename) {
        $this->x3dFile = $filename;
    }
    public function toX3D() {
        $this->group = file_get_contents($this->x3dFile);
        return parent::toX3D('group');
    }
}

?>
