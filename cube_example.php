<?php
require 'libs/X3D.php';

// create scene object
$scene = new Scene();

$cube = new Shape('Sphere');
$cube->shape()->setAttribute('size', "1 1 1");

$cube->transform()->setAttribute('translation', Coordinates::CreateString(0, 0, 0));

$scene->appendShape($cube);

$scene->saveX3D('tmp/cube_example.x3d');
?>
