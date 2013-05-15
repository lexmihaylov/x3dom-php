<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Scene
 *
 * @author alexander
 */
class Scene extends X3D {
    private $shapes = array();
    protected $scene = '';    
    public function __construct() {
        parent::__construct();
    }
    
    private function createX3D() {
        foreach($this->shapes as $shape) {
            $this->scene .= "\n".$shape->toX3D()."\n";
        }
    }
    
    private function generateX3DFormat() {
        $this->createX3D();
        return $this->loadTemplate('scene');
    }
    
    public function appendShape($shape) {
        $this->shapes[] = $shape;
    }
    
    public function shapes() {
        return $this->shapes;
    }
    
    public function getShape($index) {
        return $this->shapes[$index];
    }
    
    public function saveX3D($filename) {
        file_put_contents($filename, $this->generateX3DFormat());
    }
    
    public function returnX3D() {
        return $this->generateX3DFormat();
    }
    
    public function dumpX3D() {
        echo $this->generateX3DFormat();
    }
}

?>
