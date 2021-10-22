<?php 
// var_dump($sepatu) 
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
    <?php 
    // if (validation_errors()) {
        // var_dump(validation_errors());
    // }
    echo validation_errors() ;
    ?>
<form action="/welcome/pesan/" method="post">
        Nama: <br>
        <input required type="text" name="nama" autocomplete="off" autofocus> <br>
        Nomor HP: <br>
        <input required type="number" name="nomor_hp" autocomplete="off"> <br>
        Sepatu: <br>
        <select name="sepatu" id="" required>
        <option hidden value="">Pilih Merk Sepatu</option>
        <?php 
        foreach ($sepatu as $sepatu) {
            ?>
            <option value="<?= $sepatu['merk'] ?>-<?= $sepatu['harga'] ?>"><?= $sepatu['merk'] ?> - Rp <?= number_format($sepatu['harga'],0,'.','.') ?></option>
            <?php
        }
        ?>
        </select>
        <input type="submit" value="Pesan Sepatu">
    </form>
</body>
</html>