<div class="w3-container">
    <h2><?= $context->product->Name ?></h2>
    <h3><?= $context->product->SKU ?></h3>
    <p class="w3-text-grey"><?= $context->product->Description?></p>
    <?php foreach($context->features as $feature){ 
        $this->render('feature',$feature);
    } 
    ?>
    <script>
        productModel = <?=$context->LoadFromIdJSON ?>;
    </script>
</div>
