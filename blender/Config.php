<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Config
 *
 * @author alexander
 */
class Config {
    static $blenderPath;
    static $importScript;
    static $scriptIncludeDir;
    
    static $screenResolution = array(
        'x' => 1024,
        'y' => 768
    );
}

Config::$blenderPath = __DIR__.'/bin/blender';
Config::$importScript = __DIR__.'/x3d_import.py';
Config::$scriptIncludeDir = __DIR__.'/bin/2.66/scripts/addons/io_scene_x3d/'

?>
