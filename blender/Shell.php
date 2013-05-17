<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Renderer
 *
 * @author alexander
 */
require __DIR__.'/Config.php';

class Shell {
    private $x3dInstance;
    private $shellCommand = array();
    
    public function __construct($x3dInstance) {
        $this->x3dInstance = $x3dInstance;
        
    }
    
    public function __destruct() {
        $tmp_file = __DIR__.'/tmp.x3d';
        if(file_exists($tmp_file))
            unlink($tmp_file);
    }


    private function saveX3D() {
        $this->x3dInstance->saveX3D(__DIR__.'/tmp.x3d');
    }
    
    private function runInBackgroun() {
        $this->shellCommand[] = '-b';
    }
    
    private function setExecutableCommand() {
        $scriptDir = Config::$scriptIncludeDir;
        $executable = Config::$blenderPath;
        $tmpFile = __DIR__.'/tmp.x3d';
        
        $this->shellCommand[] = "SCRIPT_DIR=\"{$scriptDir}\" TMP_FILE=\"{$tmpFile}\" {$executable}";
    }
    
    private function prepareImportCommand() {
        $importScript = Config::$importScript;
        $blankStage = __DIR__.'/stage.blend';
        
        $this->shellCommand[] = "{$blankStage} -P {$importScript}";
    }
    
    private function setRenderedImageOptions($filename) {
        $this->shellCommand[] = "-o {$filename} -F PNG -x 1 -f 1";
    }
    
    private function execCommand() {
        system(implode(' ', $this->shellCommand));
    }
    
    public function import() {
        $this->saveX3D();
        
        $this->setExecutableCommand();
        $this->prepareImportCommand();
        
        $this->execCommand();
    }
    
    public function saveImage($filename) {
        $this->saveX3D();
        
        $this->setExecutableCommand();
        $this->runInBackgroun();
        $this->prepareImportCommand();
        $this->setRenderedImageOptions($filename);
        
        $this->execCommand();
    }
}

?>
