<?php
require 'libs/X3D.php';

// create scene object
$scene = new Scene();

$cube = new Shape();
// transformation and positioning
$cube->transform()->setAttribute('translation', Coordinates::CreateString(2, 1, 2));

// material properties
$cube->material()->setAttribute('diffuseColor', Color::CreateString(255, 255, 255));

$cube->faceSets()->isSolid(true);
// define shape points
$cube->faceSets()->setPoint('0', Coordinates::Create(1, 1, -1));
$cube->faceSets()->setPoint('1', Coordinates::Create(1, -1, -1));
$cube->faceSets()->setPoint('2', Coordinates::Create(-1, -1, -1));
$cube->faceSets()->setPoint('3', Coordinates::Create(-1, 1, -1));
$cube->faceSets()->setPoint('4', Coordinates::Create( 1, 0.99, 1));
$cube->faceSets()->setPoint('5', Coordinates::Create(0.99, -1, 1));
$cube->faceSets()->setPoint('6', Coordinates::Create(-1, -1, 1));
$cube->faceSets()->setPoint('7', Coordinates::Create(-1, 1, 1));

// define shape faces
$cube->faceSets()->setFaces(array(
    '0 1 2 3', 
    '4 7 6 5', 
    '0 4 5 1', 
    '1 5 6 2', 
    '2 6 7 3', 
    '4 0 3 7'
));

$scene->appendShape($cube);

$scene->saveX3D('tmp/example.x3d');
?>
