<?php
require 'libs/X3D.php';

// create scene object
$scene = new Scene();

$cube = new Shape();
// transformation and positioning
$cube->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, 0, 0));

// material properties
$cube->material()->setAttribute(MaterialAttribute::diffuseColor, Color::CreateString(1, 1, 1));

$cube->faceSets()->isSolid(true);
// define shape points
$cube->faceSets()->setPoint('0', Coordinates::Create(3, 3, -5));
$cube->faceSets()->setPoint('1', Coordinates::Create(3, 0, -5));
$cube->faceSets()->setPoint('2', Coordinates::Create(-3, 0, -5));
$cube->faceSets()->setPoint('3', Coordinates::Create(-3, 3, -5));
$cube->faceSets()->setPoint('4', Coordinates::Create( 3, 2.99, 5));
$cube->faceSets()->setPoint('5', Coordinates::Create(2.99, 0, 5));
$cube->faceSets()->setPoint('6', Coordinates::Create(-3, 0, 5));

// define shape faces
$cube->faceSets()->setFaces(array(
    array(0, 1, 2, 3),
    array(4, 5, 1, 0),
    array(5, 6, 2, 1),
));

$scene->appendShape($cube);

$scene->saveX3D('tmp/scene_example.x3d');
?>