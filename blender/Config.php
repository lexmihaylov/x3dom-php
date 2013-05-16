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
}

Config::$blenderPath = '/home/alexander/Desktop/blender-2.66a-linux-glibc211-x86_64/blender';
Config::$importScript = __DIR__.'/x3d_import.py';
Config::$scriptIncludeDir = '/home/alexander/Desktop/blender-2.66a-linux-glibc211-x86_64/2.66/scripts/addons/io_scene_x3d/'

?>
