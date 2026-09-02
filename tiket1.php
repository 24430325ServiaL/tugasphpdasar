<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $kodepromo= "PROMO30";
    $hargabarang = 100000;

    $kodebaru = str_replace("PROMO","","PROMO30"); 

    //echo $kodebaru;

    $diskon=$hargabarang*($kodebaru/100);
    $total = $hargabarang-$diskon;
    echo "<br>";
    echo "Total Belanja Anda", $total;

    ?>

</body>
</html>