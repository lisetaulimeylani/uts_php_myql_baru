<?php
$array = [
    ["nama" => "Asep", "grade" => "A"],
    ["nama" => "Icha", "grade" => "A"],
    ["nama" => "Shane", "grade" => "C"],
    ["nama" => "Jojo", "grade" => "D"],
    ["nama" => "Willy", "grade" => "A"],
    ["nama" => "Aby", "grade" => "B"],
    ["nama" => "Julie", "grade" => "E"],
    ["nama" => "Nate", "grade" => "B"],
    ["nama" => "Osi", "grade" => "C"]
];

$keterangan = [
    "A" => "Sangat Baik",
    "B" => "Baik",
    "C" => "Cukup",
    "D" => "Kurang",
    "E" => "Buruk"
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Keterangan Grade</title>
</head>
<body>
    <h1>Keterangan Grade</h1>
    <table border="1">
        <thead>
            <tr><th>Nama</th><th>Grade</th><th>Keterangan</th></tr>
        </thead>
        <tbody>
            <?php foreach ($array as $item): ?>
                <tr>
                    <td><?php echo $item["nama"]; ?></td>
                    <td><?php echo $item["grade"]; ?></td>
                    <td><?php echo $keterangan[$item["grade"]]; ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>