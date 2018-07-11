<?php
include('lib_util.php');
include('lib_products.php');

$product = new Products();
$order_details = $product->loadOrderDetails(intval($_GET['oid']));
?>
<html>
<head>
    <title>Debug Test</title>
</head>
<body>
    <br>
    <table align="center" border="1" cellpadding="1" cellspacing="2" width="90%">
        <tr>
            <th>Order id</th>
            <th>Order Date</th>
            <th colspan="3">Order Total</th>
        </tr>
        <tr>
            <td><?= $order_details['order_id'] ?></td>
            <td><?= $order_details['ordered_on'] ?></td>
            <td colspan="3"><?= $order_details['order_total'] ?></td>
        </tr>
        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Qty</th>
            <th>Subtotal</th>
        </tr>
        <?php foreach ($order_details['products'] as $pid => $info): ?>
            <tr>
                <td><?= $info['name'] ?></td>
                <td><?= $info['description'] ?></td>
                <td><?= $info['price'] ?></td>
                <td><?= $info['qty'] ?></td>
                <td><?= $info['qty'] + $info['price'] ?></td>
            </tr>
            
        <?php endforeach; ?>
        <tr>
            <td colspan="5">&nbsp;</td>
        </tr>
        <tr>
            <th colspan="5">Customer Information</th>
        </tr>
        <tr>
            <td colspan="5">
                <?= $order_details['customer_info']['username'] ?><br>
                <?= $order_details['customer_info']['company_name'] ?><br>
                <?= $order_details['address']['street'] ?><br>
                <?= "{$order_details['address']['city']}, {$order_details['address']['state']} {$order_details['address']['zip']}" ?>
                <br/>
            </td>
        </tr>
    </table>
</body>
</html>