<?php
require 'libs/X3D.php';

// create scene object
$scene = new Scene();

$cube = new Shape();
// transformation and positioning
$cube->transform()->setAttribute('translation', '2.000000 1.000000 2.000000');
$cube->transform()->setAttribute('scale', '1.000000 1.000000 1.000000');
$cube->transform()->setAttribute('rotation', '1.000000 0.000000 0.000000 0.000000');
// material properties
$cube->material()->setAttribute('diffuseColor', '0.800 0.800 0.800');
$cube->material()->setAttribute('specularColor', '0.401 0.401 0.401');
$cube->material()->setAttribute('emissiveColor', '0.000 0.000 0.000');
$cube->material()->setAttribute('ambientIntensity', '0.333');
$cube->material()->setAttribute('shininess', '0.098');
$cube->material()->setAttribute('transparency', '0.0');

$cube->faceSets()->isSolid(true);
// define shape points
$cube->faceSets()->setPoint('0', Coordinates::Create(1.000000, 1.000000, -1.000000));
$cube->faceSets()->setPoint('1', Coordinates::Create(1.000000, -1.000000, -1.000000));
$cube->faceSets()->setPoint('2', Coordinates::Create(-1.000000, -1.000000, -1.000000));
$cube->faceSets()->setPoint('3', Coordinates::Create(-1.000000, 1.000000, -1.000000));
$cube->faceSets()->setPoint('4', Coordinates::Create( 1.000000, 0.999999, 1.000000));
$cube->faceSets()->setPoint('5', Coordinates::Create(0.999999, -1.000001, 1.000000));
$cube->faceSets()->setPoint('6', Coordinates::Create(-1.000000, -1.000000, 1.000000));
$cube->faceSets()->setPoint('7', Coordinates::Create(-1.000000, 1.000000, 1.000000));

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
