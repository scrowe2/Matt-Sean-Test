<div class="w3-container">
    <div class="w3-container w3-threequarter"
        <h2><?= $context->product->Name ?></h2>
        <h3><?= $context->product->SKU ?></h3>
        <p class="w3-text-grey"><?= $context->product->Description?></p>
        <?php foreach($context->features as $feature){ 
            $this->render('feature',$feature);
        } 
        ?>
    </div>
    <div class="w3-container w3-quarter">
        <div class=" w3-container w3-bottom">
            <h3>Configuration Summary</h3>
            <a class="w3-button">Calculate</a>
            <a class="w3-button">Get a Quote</a>
        </div>
    </div>
</div>
<script>
    productModel = <?=$context->LoadFromIdJSON ?>;
</script>

