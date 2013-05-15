<?php

class X3D {
    private $attributes = array();
    
    public function __construct() {}
    
    protected function loadTemplate($name) {
        ob_start();
        include dirname(__DIR__)."/template/{$name}.php";
        $contents = ob_get_contents();
        ob_clean();
        
        return $contents;
    }
    
    public function setAttribute($name, $value) {
        $this->attributes[$name] = $value;
    }
    
    public function getAttribute($name) {
        return $this->attributes[$name];
    }
    
    public function attributes() {
        $this->attributes;
    }
    
    public function attributes2String() {
        $string = '';
        foreach($this->attributes as $name => $value) {
            $string .= "{$name}={$value}\n";
        }
        
        return $string;
    }
    
    public function toX3D($templateName) {
        return $this->loadTemplate($templateName);
    }
}

/*** Class Inclusion ***/

include __DIR__.'/Coordinates.php';
include __DIR__.'/FaceSets.php';
include __DIR__.'/Material.php';
include __DIR__.'/Transform.php';
include __DIR__.'/BasicObject.php';
include __DIR__.'/Shape.php';
include __DIR__.'/PointLamp.php';
include __DIR__.'/Camera.php';
include __DIR__.'/Scene.php';

?>
