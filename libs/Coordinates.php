<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coordinates
 *
 * @author alexander
 */
class Coordinates {
    public $x, $y, $z;
    
    public function __construct($x, $y, $z) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }
    
    public function toString() {
        return "{$this->x} {$this->y} {$this->z}";
    }
    
    public static function Create($x, $y, $z) {
        return new Coordinates($x, $y, $z);
    }
    
    public static function CreateString($x, $y, $z) {
        return self::Create($x, $y, $z)->toString();
    }
}

?>
