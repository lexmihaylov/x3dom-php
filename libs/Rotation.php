<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Rotation
 *
 * @author alexander
 */
class Rotation {
    public $x, $y, $z, $angle;
    
    public function __construct($x, $y, $z, $angle) {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
        $this->angle = $angle;
    }
    
    public function toString() {
        return "{$this->x} {$this->y} {$this->z} {$this->angle}";
    }
    
    public static function Create($x, $y, $z, $angle) {
        return new Rotation($x, $y, $z, $angle);
    }
    
    public static function CreateString($x, $y, $z, $angle) {
        return self::Create($x, $y, $z, $angle)->toString();
    }
}

?>
