<tr class="w3-row w3-hide-small w3-hide-medium">
    <td class="w3-cell">
        <input type="checkbox" selected="<?=$context->selected ? 'true' : 'false'?>" disabled="<?=$context->required ? 'true' : 'false'?>" name="<?=$context->Id?>"/>            
    </td>
    <td class="w3-cell"><?=$prod->product->Name ?></td>
    <td class="w3-cell"><?=$prod->product->SKU ?></td>
    <td class="w3-cell"><?=$prod->product->Description ?></td>
    <td class="w3-cell"><?=$prod->quantity ?></td>
    <td class="w3-cell"><?=$prod->unitPrice ?></td>
</tr>
