<?php
/* @var $this yii\web\View */

$this->title = 'Task 2';

?>

<h1><?= $this->title ?></h1>


<table class="table-container">
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
            <td><?= $item['order_id'] ?></td>
            <td><?= $item['amount'] ?></td>
            <td><?= $item['delivery_amount'] ?></td>
            <td><?= $item['total_amount'] ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach ($json as $item): ?>
        <tr>
            <td><?= $item['orderid'] ?></td>
            <td><?= $item['amount'] ?></td>
            <td><?= $item['delivery']['totalamount'] ?></td>
            <td><?= $item['totalamount'] ?></td>
        </tr>
    <?php endforeach; ?>
    <?php foreach ($xml as $item): ?>
        <tr>
            <td><?= $item['ID'] ?></td>
            <td><?= $item['OrderAmount'] ?></td>
            <td><?= $item['CourierDeliveryPrice'] ?></td>
            <td><?= $item['TotalOrderAmount'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>