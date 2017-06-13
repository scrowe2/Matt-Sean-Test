<table class="w3-table">

<?php
foreach($context->result->records as $prod){
?>
    <tr class="w3-row">
        <td class="w3-cell"><?=$prod->Name ?></td>
        <td class="w3-cell"><?=$prod->ProductCode ?></td>
        <td class="w3-cell"><?=$prod->Description ?></td>
            
    </tr>


<?php
}    
?>

</table>    