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
    
    private function importCommandLine() {
        $scriptDir = Config::$scriptIncludeDir;
        $executable = Config::$blenderPath;
        $importScript = Config::$importScript;
        $tmpFile = __DIR__.'/tmp.x3d';
        $blankStage = __DIR__.'/stage.blend';
        
        return "SCRIPT_DIR=\"{$scriptDir}\" TMP_FILE=\"{$tmpFile}\" {$executable} {$blankStage} -P {$importScript}";
    }
    
    private function exportImage($filename) {
        $scriptDir = Config::$scriptIncludeDir;
        $executable = Config::$blenderPath;
        $importScript = Config::$importScript;
        $tmpFile = __DIR__.'/tmp.x3d';
        $blankStage = __DIR__.'/stage.blend';
        
        return "SCRIPT_DIR=\"{$scriptDir}\" TMP_FILE=\"{$tmpFile}\" {$executable} -b {$blankStage} -P {$importScript} -o {$filename} -F PNG -x 1 -f 1";
    }
    
    public function import() {
        $this->saveX3D();
        system($this->importCommandLine());
    }
    
    public function saveImage($filename) {
        $this->saveX3D();
        system($this->exportImage($filename));
    }
}

?>
