<?php

require_once 'Computer.php';

// 3.
$my_computer = new Computer;

// 4.
$my_computer->model = 'Lenovo Thinkbook';
$my_computer->operating_system = 'Windows 11';
$my_computer->is_portable = true;
$my_computer->status = 'on';


$my_computer->switchOff();  // off

$my_computer->toggleSwitch(); // on
$my_computer->toggleSwitch(); // off
$my_computer->toggleSwitch(); // on
$my_computer->toggleSwitch(); // off
$my_computer->toggleSwitch(); // on

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>My computer</h1>
    <table>
        <tr>
            <th>Model:</th>
            <td><?= $my_computer->model ?></td>
        </tr>
        <tr>
            <th>OS:</th>
            <td><?= $my_computer->operating_system ?></td>
        </tr>
        <tr>
            <th>Portable:</th>
            <td><?= $my_computer->is_portable ? 'yes' : 'no' ?></td>
        </tr>
        <tr>
            <th>Status:</th>
            <td>switched <?= $my_computer->status ?></td>
        </tr>
    </table>

    <?php
        $columns = [
            'model' => 'Model',
            'operating_system'  => 'OS',
            'is_portable'  => 'Portable ?',
            'status' => 'Is it on?'
        ]
    ?>

    <!-- <table>
        <?php foreach ($columns as $property_name => $column_name) : ?>
            <tr>
                <th>
                    <?= $column_name ?>
                </th>
                <td>
                    <?= $my_computer->{$property_name} ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table> -->

</body>
</html>
