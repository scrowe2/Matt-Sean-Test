<div class="w3-container">
    <div class="w3-container w3-threequarter">
        <h2><?= $context->product->Name ?></h2>
        <h3><?= $context->product->SKU ?></h3>
        <p class="w3-text-grey"><?= $context->product->Description?></p>
        <?php foreach($context->features as $feature){ 
            $this->render('feature',$feature);
        } 
        ?>
    </div>
    <div class="w3-container w3-quarter">
        <div class=" w3-container w3-top" style="margin-top: 80px;">
            <h3>Configuration Summary</h3>
            <div><a class="w3-button w3-red w3-hover-black w3-hover-text-red">Calculate</a></div>
            <div><a class="w3-button w3-black w3-hover-red w3-hover-text-black">Get a Quote</a></div>
        </div>
    </div>
</div>
<script>
    productModel = <?=$context->LoadFromIdJSON ?>;
</script>

