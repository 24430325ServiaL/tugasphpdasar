<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $nama="aLiF bUdI";
    $namabener= strtolower($nama);
    $namabener2=ucwords($namabener);
    echo $namabener2;

    $norek= 1234567890;
    $rahasia=substr($norek,5,4);
    $hasil = $norek, "****",$rahasia,"****";
    echo $hasil; 
    




    ?>
</body>
</html>