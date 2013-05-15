<?php

class X3D {
    public function __construct() {}
    
    protected function loadTemplate($name) {
        ob_start();
        include dirname(__DIR__)."/template/{$name}.php";
        $contents = ob_get_contents();
        ob_clean();
        
        return $contents;
    }
}

?>
