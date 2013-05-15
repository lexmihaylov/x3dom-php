<?php echo '<? xml version = "1.0" encoding = "UTF-8" ?>' ?>
<!DOCTYPE X3D PUBLIC "ISO//Web3D//DTD X3D 3.0//EN" "http://www.web3d.org/specifications/x3d-3.0.dtd">
<X3D version="3.0" profile="Immersive" xmlns:xsd="http://www.w3.org/2001/XMLSchema-instance" xsd:noNamespaceSchemaLocation="http://www.web3d.org/specifications/x3d-3.0.xsd">
    <head>
        <meta name="generator" content="Blender 2.66 (sub 1)" />
    </head>
    <Scene>
        <NavigationInfo headlight="false"
                        visibilityLimit="0.0"
                        type='"EXAMINE", "ANY"'
                        avatarSize="0.25, 1.75, 0.75"
                        />
        <Background DEF="WO_World"
                    groundColor="0.051 0.051 0.051"
                    skyColor="0.051 0.051 0.051"
                    />
        <!-- generated scene -->
        <?php echo $this->scene ?>
        <!-- /generated scene -->
    </Scene>
</X3D>