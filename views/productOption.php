<tr class="w3-row w3-hide-small w3-hide-medium">
    <td class="w3-cell">
        <?php 
        if($context->isRadio){ 
        ?>
            <input type="radio" value="<?=$context->Id ?>" name="<?=$context->featureId?>"<?=$context->required ? ' disabled' : ''?><?=$context->selected ? ' selected' : ''?>/>
        <?php 
        } 
        else {
        ?>
            <input type="checkbox" value="<?=$context->Id?>" name="<?=$context->featureId?>"<?=$context->required ? ' disabled' : ''?><?=$context->selected ? ' selected' : ''?>/>
        <?php
        }
        ?>
    </td>
    <td class="w3-cell"><?=$context->product->Name ?></td>
    <td class="w3-cell"><?=$context->product->SKU ?></td>
    <td class="w3-cell"><?=$context->product->Description ?></td>
    <td class="w3-cell"><?=$context->quantity ?></td>
    <td class="w3-cell w3-right-align"><?= money_format('%n', $context->unitPrice) ?></td>
</tr>
