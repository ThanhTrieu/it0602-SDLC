<?php
$listStudents = [
    ["id" => 1, "name" => "Teo", "age" => 20, "money" => 1000],
    ["id" => 2, "name" => "Ty", "age" => 20, "money" => 1500],
    ["id" => 3, "name" => "Suu", "age" => 19, "money" => 2000],
    ["id" => 4, "name" => "Thin", "age" => 21, "money" => 3500]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sach sinh vien</title>
</head>
<body>
    <h1> Danh sach sinh vien</h1>
    <table width="100%" border="1" cellPadding="0" cellSpacing="0">
        <thead>
            <tr>
                <th>Ma SV</th>
                <th>Ho ten</th>
                <th>Tuoi</th>
                <th>Hoc bong</th>
            </tr>
        </thead>
        <tbody>
            <?php $totalMoney = 0; ?>
            <?php foreach($listStudents as $key => $item): ?>
                <?php $totalMoney += $item["money"]; ?>
                <tr>
                    <td><?= $item["id"]; ?></td>
                    <td><?= $item["name"]; ?></td>
                    <td><?= $item["age"]; ?></td>
                    <td><?= number_format($item["money"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
        <tfoot>
            <tr>
                <td colspan="3">Tong tien hoc bong</td>
                <td><?= number_format($totalMoney); ?></td>
            </tr>
        </tfoot>
    </table>
</body>
</html>