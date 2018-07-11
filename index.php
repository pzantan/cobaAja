<?php

include('lib_util.php');
include('lib_products.php');

//simulate database
$custinfo = getCustomerInfo();
$orderInfo = getOrderInfo();
$products = Products::loadAllProducts();
?>
<html>
<head>
    <title>Debug Test</title>
    <script language="Javascript">
        function moreinfo(id) {
            document.getElementById('moreinfo_' + id).style.display = 'block';
        }
    </script>
</head>
<body>
    <div style="align:right; background-color:silver;">
        Basic Info...
    </div>
    <br>
    <table border="2" cellpadding="5">
        <tr>
            <th>Order ID</th>
            <th>Order Date</th>
            <th>Username</th>
            <th>Products</th>
        </tr>
        <?php foreach ($orderInfo as $key => $infoStruct): ?>
            <tr>
                <td><?= $key ?></td>
                <td><?= $infoStruct['ordered_on'] ?></td>
                <td><?= $infoStruct['ordered_by'] ?></td>
                <td>
                    <a href="products.php?oid=<?= $key ?>">More Info...</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?php foreach ($orderInfo as $key => $infoStruct): ?>
        <div id="moreinfo_<?= $key ?>" style="display:none;padding:.5em 2em; background-color:#def;margin:2em 1.5em; border:2px solid silver;">
            Order ID: #<?= sprintf('%d', $key) ?>
            <ol>
            <?php foreach ($infoStruct['products'] as $prodId): ?>
                <li><?= $products[$prodId]->name ?></li>
            <?php endforeach; ?>
            </ol>
        </div>
    <?php endforeach; ?>
</body>
</html>