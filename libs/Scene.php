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
    
    private $navigationInfo;
    private $background;
    public function __construct() {
        parent::__construct();
        $this->navigationInfo = new X3D();
        $this->background = new X3D();
        
        $this->navigationInfo->setAttribute(SceneNavigationAttribute::headlight, 'false');
        $this->navigationInfo->setAttribute(SceneNavigationAttribute::visibilityLimit, '0.0');
        $this->navigationInfo->setAttribute(SceneNavigationAttribute::type, "'EXAMINE', 'ANY'");
        $this->navigationInfo->setAttribute(SceneNavigationAttribute::avatarSize, '0.25, 1.75, 0.75');
        
        $this->background->setAttribute(SceneBackgroundAttribute::groundColor, Color::CreateString(0.051, 0.051, 0.051));
        $this->background->setAttribute(SceneBackgroundAttribute::skyColor, Color::CreateString(0.051, 0.051, 0.051));
    }
    
    public function navigationInfo() {
        return $this->navigationInfo;
    }
    
    public function background() {
        return $this->background;
    }
    
    public function setNavigationInfo($navInfo) {
        $this->navigationInfo = $navInfo;
    }
    
    public function setBackground($background) {
        $this->background = $background;
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
    
    public function setShapes($shapes) {
        $this->shapes = $shapes;
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
