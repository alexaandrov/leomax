<?php
/* @var $this yii\web\View */

$this->title = 'Task 2';

?>

<h1><?= $this->title ?></h1>


<table class="table-container">
    <thead>
    <tr>
        <th>№</th>
        <th>Order ID</th>
        <th>Amount</th>
        <th>Delivery Amount</th>
        <th>Total Amount</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $item): ?>
        <tr>
            <td><?= $item['id'] ?></td>
            <td><?= $item['order_id'] ?></td>
            <td><?= $item['amount'] ?></td>
            <td><?= $item['delivery_amount'] ?></td>
            <td><?= $item['total_amount'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>