<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Group
 *
 * @author alexander
 */
class Group extends BasicObject {
    private $shapes;
    protected $group = '';
    
    private function generateX3D() {
        foreach($this->shapes as $shape) {
            $this->group .= $shape->toX3D();
        }
    }
    
    public function toX3D() {
        $this->generateX3D();
        
        return parent::toX3D('group');
    }
    
    public function appendShape($shape) {
        $this->shapes[] = $shape;
    }
    
    public function shape($index) {
        return $this->shapes[$index];
    }
    
    public function shapes() {
        return $this->shapes;
    }
}

?>
