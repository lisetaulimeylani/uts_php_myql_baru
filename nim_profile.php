<?php 

$array = [
    "NIM" => 2357401012,
    "NAMA" => "Lisetauli Meylani",
    "KELAS" => "MI 23",
    "JENIS_KELAMIN" => "Perempuan",
    "EMAIL" => "lisetaulimeylani@gmail.com",
    "NOMOR_HP" => "password"
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NIM PROFILE</title>
</head>
<body>
    <table>
        <thead>
            <th>NIM</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>JENIS KELAMIN</th>
            <th>EMAIL</th>
            <th>NOMOR HP</th>
        </thead>
        <tbody>
            <tr>
                <td><?= $array['NIM'] ?></td>
                <td><?= $array['NAMA'] ?></td>
                <td><?= $array['KELAS'] ?></td>
                <td><?= $array['JENIS_KELAMIN'] ?></td>
                <td><?= $array['EMAIL'] ?></td>
                <td><?= $array['NOMOR_HP'] ?></td>
            </tr>
        </tbody>
    </table>
</body>
</html>

