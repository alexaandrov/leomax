<?php
/* @var $this yii\web\View */

$this->title = 'Task 1';

?>

<h1><?= $this->title ?></h1>


<table id="sorted" class="table-container">
    <thead>
    <tr>
        <th>№</th>
        <th>First Name</th>
        <th>Surname</th>
        <th>Birth Date</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $object): ?>
        <tr>
            <td><?= $object['id']; ?></td>
            <td><?= $object['name'] ?></td>
            <td><?= $object['surname'] ?></td>
            <td><?= $object['birthdate'] ?></td>
        </tr>
    <?php endforeach; ?>
    </tbody>
</table>