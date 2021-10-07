<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String & Array</title>
    <style>
        * {
            font-size: 24px;
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>
<body>
    <?php
    $nama = "BADRUL HIDAYAT BIN BAHAROM";
    echo $nama[13]; 
    echo $nama[1];
    echo $nama[11];
    echo $nama[12];
    echo $nama[3];
    ?>
    <hr>

    <?php
    $pelajar[0] = 'BADRUL';
    $pelajar[1] = 'HIDAYAT';
    $pelajar[2] = 'BIN';
    $pelajar[3] = 'BAHAROM';

    for($x = 0; $x < 3; $x++){
        echo $pelajar[$x] . ' ';
    }
    echo '<hr>';

    foreach ($pelajar as $pel){
        echo $pel . ' ';
    }

    $pelajar = implode (' ',$pelajar);
    echo $pelajar;
    echo '<hr>';

    #explode()
    $ptss = "POLITEKNIK TUANKU SYED SIRAJUDDIN";
    $kata = explode(' ', $ptss);
    echo $kata[2];
    echo '<hr>';

    $senarai = 'Ali, Abu, Mat, Din';
    echo "<p>Senarai Asal: $senarai </p>";
    $ahli = explode(',', $senarai);
    echo '<pre>', print_r($ahli), '</pre>';
    ?>
    <ol>
        <?php
        foreach($ahli as $nama) {
            echo "<li>$nama</li>";
        }
        ?>
    </ol>
    <hr>

    <?php
    $citacita = 'Doktor';
    $hasil = strcmp($citacita, 'Doktor');
    if ($hasil == 0){
        echo 'Sama';
    } elseif ($hasil < 0) {
        echo 'Kurang';
    } else {
        echo 'Lebih';
    }
    ?>
</body>
</html>