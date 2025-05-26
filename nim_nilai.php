<?php
$array = [
    ["nama" => "Asep", "nilai" => 78],
    ["nama" => "Icha", "nilai" => 89],
    ["nama" => "Shane", "nilai" => 45],
    ["nama" => "Jojo", "nilai" => 67],
    ["nama" => "Willy", "nilai" => 85],
    ["nama" => "Aby", "nilai" => 70],
    ["nama" => "Julie", "nilai" => 100],
    ["nama" => "Nate", "nilai" => 66],
    ["nama" => "Osi", "nilai" => 83]
];

function getGrade($nilai) {
    if ($nilai >= 85) return "A";
    elseif ($nilai >= 75) return "B";
    elseif ($nilai >= 65) return "C";
    elseif ($nilai >= 55) return "D";
    else return "E";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Daftar Nilai</title>
</head>
<body>
    <h1>Daftar Nilai</h1>
    <table border="1">
        <thead>
            <tr><th>Nama</th><th>Nilai</th><th>Grade</th></tr>
        </thead>
        <tbody>
            <?php foreach ($array as $item): ?>
                <tr>
                    <td><?php echo $item["nama"]; ?></td>
                    <td><?php echo $item["nilai"]; ?></td>
                    <td><?php echo getGrade($item["nilai"]); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>