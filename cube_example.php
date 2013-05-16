<?php
require 'libs/X3D.php';

// create scene object
$scene = new Scene();

$cube = new Cube();

$cube->transform()->setAttribute('translation', Coordinates::CreateString(0, 0, 0));

$scene->appendShape($cube);

$scene->saveX3D('tmp/cube_example.x3d');
?>
