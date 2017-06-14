<table class="w3-table-all">
    <thead>
        <tr class="w3-row w3-hide-small">
            <th class="w3-cell"></th>
            <th class="w3-cell">Product</th>
            <th class="w3-cell">Product Code</th>
            <th class="w3-cell">Description</th>
            <th class="w3-cell"></th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($context->result->records as $prod){
?>
    <tr class="w3-row w3-hide-small">
        <td class="w3-cell">
            <img style="height: 80px; width: auto;" class="w3-image" src="https://mfgqtc.my.salesforce.com/servlet/servlet.ImageServer?id=<?=$prod->SBQQ__ProductPictureID__c ?>&oid=00D460000000MPU" />
        </td>
            
        <td class="w3-cell"><?=$prod->Name ?></td>
        <td class="w3-cell"><?=$prod->ProductCode ?></td>
        <td class="w3-cell"><?=$prod->Description ?></td>
        <td class="w3-cell">
            <?php if($prod->Configurable_on_Website__c){ ?>
            <a href="/products/configure?pid=<?= $prod->Id ?>" class="w3-button w3-red w3-text-black w3-hover-black w3-hover-text-red">Build It</a>
            <?php } ?>
        </td>
    </tr>
    
    <tr class="w3-row w3-hide-medium w3-hide-large">
        <td class="w3-cell">
            <div class="w3-container">
                <h3><?=$prod->Name ?></h3>
                <p><?=$prod->ProductCode ?></p>
                <img style="height: 80px; width: auto;" class="w3-image" src="https://mfgqtc.my.salesforce.com/servlet/servlet.ImageServer?id=<?=$prod->SBQQ__ProductPictureID__c ?>&oid=00D460000000MPU" />
                <p><?=$prod->Description ?></p>
                <?php if($prod->Configurable_on_Website__c){ ?>
                <a href="/products/configure?pid=<?= $prod->Id ?>" class="w3-button w3-red w3-text-black w3-hover-black w3-hover-text-red">Build It</a>
                <?php } ?>
            </div>
        </td>
    </tr>
<?php
}    
?>
    </tbody>
</table>    