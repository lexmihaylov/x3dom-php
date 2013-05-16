<Shape>

    <?php if($this->shape() instanceof DefinedShape): ?>
        <?php echo $this->shape()->toX3D() ?>
    <?php endif; ?>

    <?php echo $this->material()->toX3D() ?>

    <?php if($this->faceSets() instanceof FaceSets): ?>
        <?php echo $this->faceSets()->toX3D() ?>
    <?php endif; ?>

</Shape>
