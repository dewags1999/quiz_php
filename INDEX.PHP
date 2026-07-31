<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BA243</title>
</head>
<body>
    <?php
    /** @var int $nim */
    $nim = 250030655;
    /** @var string $nama */
    $nama = "Dewa Swastika";
    /** @var int $angkatan */
    $angkatan = 2025;
    /** @var int $umur */
    $umur = 20;
    /** @var string $gender */
    $gender = "male";
    /** @var array $hobi */
    $hobi = ["badminton", "coding", "tennis"];

    echo "<h2>Biografi</h2>";
    echo "<p>NIM (<strong>int</strong>): $nim</p>";
    echo "<p>Nama (<strong>string</strong>): $nama</p>";
    echo "<p>Angkatan (<strong>int</strong>): $angkatan</p>";
    echo "<p>Umur (<strong>int</strong>): $umur</p>";
    echo "<p>Gender (<strong>string</strong>): $gender</p>";
    echo "<p>Hobi (<strong>array</strong>): " . implode(", ", $hobi) . "</p>";
    ?>
</body>
</html>
