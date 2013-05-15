<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Color
 *
 * @author alexander
 */
class Color {
    public $r, $g, $b;
    
    public function __construct($red, $green, $blue) {
        $this->r = $red;
        $this->g = $green;
        $this->b = $blue;
    }
    
    public function toString() {
        return "{$this->r} {$this->g} {$this->b}";
    }
    
    public static function Create($red, $green, $blue) {
        return new Color($red, $green, $blue);
    }
    
    public static function CreateString($red, $green, $blue) {
        return self::Create($red, $green, $blue)->toString();
    }
}

?>
