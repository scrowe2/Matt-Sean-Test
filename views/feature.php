<div class='w3-container w3-border-red w3-round'>
    <h3><?=$context->Name?></h3>
    <p>Min Selections: <?=$context->MinOptions?></p>
    <p>Max Selections: <?=$context->MaxOptions?></p>
    <div class="w3-container">
        <?php
        foreach($context->options as $option){
            $this->render('productOption',$option);
        }
        ?>
    </div>
</div>