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
    echo validation_errors() ;
    ?>
<form action="<?= base_url('welcome/pesan') ?>" method="post">
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
            <option value="<?= $sepatu['merk'] ?> - Rp <?= number_format($sepatu['harga'],0,'.','.') ?>"><?= $sepatu['merk'] ?> - Rp <?= number_format($sepatu['harga'],0,'.','.') ?></option>
            <?php
        }
        ?>
        </select>
        <input type="submit" value="Pesan Sepatu">
    </form>
</body>
</html>