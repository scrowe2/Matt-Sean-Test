<div class="w3-container">
    <div class="w3-container w3-twothird"
        <h2><?= $context->product->Name ?></h2>
        <h3><?= $context->product->SKU ?></h3>
        <p class="w3-text-grey"><?= $context->product->Description?></p>
        <?php foreach($context->features as $feature){ 
            $this->render('feature',$feature);
        } 
        ?>
    </div>
    <div class="w3-container w3-third">
        <h3>Configuration Summary</h3>
        <table>
            <tr>
                <td>Calculate</td>
                <td>Get a Quote</td>
            </tr>
        </table>
    </div>
</div>
<script>
    productModel = <?=$context->LoadFromIdJSON ?>;
</script>

