<div class='w3-container w3-border-red w3-round w3-border w3-margin-bottom'>
    <h3><?=$context->Name?></h3>
    <!--
    <p>Min Selections: <?$context->MinOptions?></p>
    <p>Max Selections: <?$context->MaxOptions?></p>
    -->
    <div class="w3-container">
        <table class="w3-table-all">
            <thead>
                <tr class="w3-row">
                    <th class="w3-cell"></th>
                    <th class="w3-cell">Option</th>
                    <th class="w3-cell">Product Code</th>
                    <th class="w3-cell">Description</th>
                    <th class="w3-cell">Quantity</th>
                    <th class="w3-cell">Price</th>
                </tr>
            </thead>
            <tbody>
            <?php
            foreach($context->options as $option){
                $this->render('productOption',$option);
            }
            ?>
            </tbody>
        </table>
    </div>
</div>