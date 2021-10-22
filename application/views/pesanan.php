<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Struk Belanja
    <table>
        <tr>
            <td>Nama Pemesan</td>
            <td>:</td>
            <td><?= $this->input->post('nama') ?></td>
        </tr>
        <tr>
            <td>Nomor Telepon</td>
            <td>:</td>
            <td><?= $this->input->post('nomor_hp') ?></td>
        </tr>
        <tr>
            <td>Sepatu Yang Dipesan</td>
            <td>:</td>
            <td><?= $this->input->post('sepatu') ?></td>
        </tr>
    </table>
    <a href="<?= base_url('welcome') ?>">pesan lagi</a>
</body>
</html>