<?php
require 'libs/X3D.php';
require 'blender/Shell.php';

$group = new Group();

$box = new Shape(ShapeType::Box);
$box->setAttribute(ShapeAtrribute::size, Coordinates::CreateString(1, 1, 1));
$box->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, 0, 0));

$sphere = new Shape(ShapeType::Shpere);
$sphere->setAttribute(ShapeAtrribute::radius, 1);
$sphere->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(1, 1, 1));

$group->appendShape($box);
$group->appendShape($sphere);

$group->transform()->setAttribute(TransformAttribute::translation, Coordinates::CreateString(0, 5, 0));
$group->transform()->setAttribute(TransformAttribute::scale, Coordinates::CreateString(1, 2, 1));

$scene = new Scene();
$scene->appendShape($group);

$blend = new Shell($scene);
$blend->import();
?>
