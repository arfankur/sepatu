<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>

        Struk Belanja
        <table>
            <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><?= $pesanan['nama'] ?></td>
            </tr>
            <tr>
                <td>Nomor Telepon</td>
                <td>:</td>
                <td><?= $pesanan['nomor_hp'] ?></td>
            </tr>
            <tr>
                <td>Merk</td>
                <td>:</td>
                <td><?= explode('-',$pesanan['sepatu'])[0] ?></td>
            </tr>
            <tr>
                <td>Ukuran</td>
                <td>:</td>
                <td><?= $pesanan['ukuran'] ?></td>
            </tr>
            <tr>
                <td>Harga</td>
            <td>:</td>
            <td>Rp <?= number_format(explode('-',$pesanan['sepatu'])[1],0,'.','.') ?></td>
        </tr>
        <tr>
            <td>Jumlah Beli</td>
            <td>:</td>
            <td><?= $pesanan['jumlah_beli'] ?></td>
        </tr>
        <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Total Harga</td>
            <td>:</td>
            <td>Rp <?= number_format($total_harga,0,'.','.') ?></td>
        </tr>
    </table>
    <a href="<?= base_url('/welcome') ?>">pesan lagi</a>
</center>
</body>
</html>