<?php
require 'libs/X3D.php';
require 'blender/Shell.php';

// create scene object
$scene = new Scene();

$room = new Shape();
// transformation and positioning
$room->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, 0, 0));

// material properties
$room->material()->setAttribute(MaterialAttribute::diffuseColor, Color::CreateString(1, 1, 1));

$room->faceSets()->isSolid(true);
// define shape points
$room->faceSets()->setPoint('0', Coordinates::Create(3, 3, -5));
$room->faceSets()->setPoint('1', Coordinates::Create(3, 0, -5));
$room->faceSets()->setPoint('2', Coordinates::Create(-3, 0, -5));
$room->faceSets()->setPoint('3', Coordinates::Create(-3, 3, -5));
$room->faceSets()->setPoint('4', Coordinates::Create( 3, 2.99, 5));
$room->faceSets()->setPoint('5', Coordinates::Create(2.99, 0, 5));
$room->faceSets()->setPoint('6', Coordinates::Create(-3, 0, 5));
$room->faceSets()->setPoint('7', Coordinates::Create(-3, 3, 5));

// define shape faces
$room->faceSets()->setFaces(array(
    array(0, 1, 2, 3),
    array(4, 5, 1, 0),
    array(5, 6, 2, 1),
    array(4, 7, 3, 0)
));

$scene->appendShape($room);

$cabinet = Shape::FromFile(__DIR__.'/resource/cabinet.x3d');
$cabinet->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(1.9, 0.6, -4.2));

$scene->appendShape($cabinet);

$ligth = new Light();
$ligth->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, 2.6, 0));

$scene->appendShape($ligth);

$camera = new Camera();
$camera->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(-3, 2, 5));
$camera->transform()->setAttribute(TransformAttribute::rotation, Rotation::CreateString(-0.144089, -0.987341, -0.066302, 0.631083)); //'-0.144089 -0.987341 -0.066302 0.631083');

$scene->appendShape($camera);

$blend = new Shell($scene);
$blend->saveImage(__DIR__.'/tmp/cabinet_test#');
?>
