<tr class="w3-row w3-hide-small w3-hide-medium">
    <td class="w3-cell">
        <input type="checkbox" selected="<?=$context->selected ? 'selected' : ''?>" name="<?=$context->Id?>"<?=$context->required ? ' disabled' : ''?>"/>            
    </td>
    <td class="w3-cell"><?=$context->product->Name ?></td>
    <td class="w3-cell"><?=$context->product->SKU ?></td>
    <td class="w3-cell"><?=$context->product->Description ?></td>
    <td class="w3-cell"><?=$context->quantity ?></td>
    <td class="w3-cell w3-right-align"><?= money_format('%n', $context->unitPrice) ?></td>
</tr>
