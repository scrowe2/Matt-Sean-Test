<table class="w3-table-all">
    <thead>
        <tr class="w3-row">
            <th class="w3-cell"></th>
            <th class="w3-cell">Product</th>
            <th class="w3-cell">Product Code</th>
            <th class="w3-cell">Description</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($context->result->records as $prod){
?>
    <tr class="w3-row">
        <td class="w3-cell">
            <img style="height: 80px; width: auto;" class="w3-image" src="https://mfgqtc.my.salesforce.com/servlet/servlet.ImageServer?id=<?=$prod->SBQQ__ProductPictureID__c ?>&oid=00D460000000MPU" />
        </td>
            
        <td class="w3-cell"><?=$prod->Name ?></td>
        <td class="w3-cell"><?=$prod->ProductCode ?></td>
        <td class="w3-cell"><?=$prod->Description ?></td>
    </tr>
<?php
}    
?>
    </tbody>
</table>    