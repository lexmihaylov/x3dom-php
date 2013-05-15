<Shape>
    <?php echo $this->material()->toX3D() ?>
    <IndexedFaceSet <?php echo $this->indexedFaceSets()->toAttributes() ?> >
        <Coordinate <?php echo $this->coordinates()->toAttributes() ?>/>
    </IndexedFaceSet>
</Shape>
