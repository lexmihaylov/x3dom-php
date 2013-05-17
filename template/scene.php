<?php echo '<?xml version = "1.0" encoding = "UTF-8"?>'.PHP_EOL ?>
<!DOCTYPE X3D PUBLIC "ISO//Web3D//DTD X3D 3.0//EN" "http://www.web3d.org/specifications/x3d-3.0.dtd">
<X3D version="3.0" profile="Immersive" xmlns:xsd="http://www.w3.org/2001/XMLSchema-instance" xsd:noNamespaceSchemaLocation="http://www.web3d.org/specifications/x3d-3.0.xsd">
    <head>
        <meta name="generator" content="Blender 2.66 (sub 1)" />
    </head>
    <Scene>
        <NavigationInfo <?php echo $this->navigationInfo()->attributes2String() ?> />
        <Background <?php echo $this->background()->attributes2String() ?> />
        
        <?php echo $this->scene ?>
        
    </Scene>
</X3D>