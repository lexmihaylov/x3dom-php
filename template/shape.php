<Shape>
    <?php echo $this->material()->toX3D() ?>
    <IndexedFaceSet <?php echo $this->indexedFaceSets()->toStringAttributes() ?> >
        <Coordinate <?php echo $this->coordinates()->toStringAttributes() ?>/>
    </IndexedFaceSet>
</Shape>
