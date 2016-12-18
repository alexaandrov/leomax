<?php
/* @var $this yii\web\View */

$this->title = 'Task 2';

?>

<h1><?= $this->title ?></h1>


<table id="sorted" class="table-container">
    <thead>
    <tr>
        <th>Order ID</th>
        <th>Amount</th>
        <th>Delivery Amount</th>
        <th>Total Amount</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($sql as $item): ?>
        <tr>
            <td><?= (int)$item['order_id'] ?></td>
            <td><?= (float)$item['amount'] ?></td>
            <td><?= (float)$item['delivery_amount'] ?></td>
            <td><?= (float)$item['total_amount'] ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach ($json as $item): ?>
        <tr>
            <td><?= (int)$item['orderid'] ?></td>
            <td><?= (float)$item['amount'] ?></td>
            <td><?= (float)$item['delivery']['totalamount'] ?></td>
            <td><?= (float)$item['totalamount'] ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach ($xml as $item): ?>
        <tr>
            <td><?= (int)$item['ID'] ?></td>
            <td><?= (float)$item['OrderAmount'] ?></td>
            <td><?= (float)$item['CourierDeliveryPrice'] ?></td>
            <td><?= (float)$item['TotalOrderAmount'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>