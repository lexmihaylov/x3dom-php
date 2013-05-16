<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Cube
 *
 * @author alexander
 */
class Cube extends Shape {
    public function __construct() {
        parent::__construct();
        
        // transformation and positioning
        $this->transform()->setAttribute('translation', Coordinates::CreateString(0, 0, 0));

        // material properties
        $this->material()->setAttribute('diffuseColor', Color::CreateString(0.8, 0.8, 0.8));

        $this->faceSets()->isSolid(true);
        // define shape points
        $this->faceSets()->setPoint('0', Coordinates::Create(1, 1, -1));
        $this->faceSets()->setPoint('1', Coordinates::Create(1, -1, -1));
        $this->faceSets()->setPoint('2', Coordinates::Create(-1, -1, -1));
        $this->faceSets()->setPoint('3', Coordinates::Create(-1, 1, -1));
        $this->faceSets()->setPoint('4', Coordinates::Create( 1, 0.999999, 1));
        $this->faceSets()->setPoint('5', Coordinates::Create(0.999999, -1.000001, 1));
        $this->faceSets()->setPoint('6', Coordinates::Create(-1, -1, 1));
        $this->faceSets()->setPoint('7', Coordinates::Create(-1, 1, 1));

        // define shape faces
        $this->faceSets()->setFaces(array(
            array(0, 1, 2, 3),
            array(4, 7, 6, 5),
            array(0, 4, 5, 1),
            array(1, 5, 6, 2),
            array(2, 6, 7, 3),
            array(4, 0, 3, 7)
        ));
    }
}

?>
