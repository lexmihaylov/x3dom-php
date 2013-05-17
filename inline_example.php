<?php
require 'libs/X3D.php';
require 'blender/Shell.php';

$shape = new X3DShape(__DIR__.'/resource/inline.x3d');
$shape->transform()->setAttribute(TransformAttribute::scale, Scale::CreateString(1, 0.5, 1));
$shape->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, -2, 0));
$shape->transform()->setAttribute(TransformAttribute::translation, Rotation::CreateString(0, -2, 0, 45));
$shape->setAttribute(Attribute::Def, 'Bull');

$shapeClone = new Shape();
$shapeClone->setAttribute(ShapeAtrribute::useObject, 'Bull');
$shapeClone->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(3, 3, 3));

$scene = new Scene();
$scene->appendShape($shape);
$scene->appendShape($shapeClone);

$blend = new Shell($scene);
$blend->import();
?>
