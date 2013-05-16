<?php

interface Attribute {
    const Def = 'DEF';
}

interface ShapeType {
    const Box = 'Box';
    const Shpere = 'Sphere';
    const Cone = 'Cone';
    const Cylinder = 'Cylinder';
    const Text = 'Text';
}

interface ShapeAtrribute {
    const height = "height";
    const size = 'size';
    const radius = 'radius';
    const bottomRadius = 'bottomRadius';
    const topRadius = 'topRadius';
    const length = 'length';
    const string = 'string';
}

interface MaterialAttribute {
    const diffuseColor = 'diffuseColor';
    const specularColor = 'specularColor';
    const emissiveColor = 'emissiveColor';
    const ambientIntensity = 'ambientIntensity';
    const shininess = 'shininess';
    const transparency = 'transparency';
}

interface TransformAttribute {
    const translation = 'translation';
    const scale = 'scale';
    const rotation = 'rotation';
}

interface SceneNavigationAttribute {
    const headlight = 'headlight';
    const visibilityLimit = 'visibilityLimit';
    const type = 'type';
    const avatarSize = 'avatarSize';
}

interface SceneBackgroundAttribute {
    const groundColor = 'groundColor';
    const skyColor = 'skyColor';
}

interface LightType {
    const DirectionalLight = 'DirectionalLight';
    const SpotLight = 'SpotLight';
    const PointLight = 'PointLight';
}

interface LightAttribute {
    const ambientIntensity = 'ambientIntensity';
    const color = 'color';
    const intensity = 'intensity';
    const radius = 'radius';
    const location = 'location';
}

interface CameraAttribute {
    const centerOfRotation = 'centerOfRotation';
    const position = 'position';
    const orientation = 'orientation';
    const fieldOfView = 'fieldOfView';
}
?>
