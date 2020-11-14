<!DOCTYPE html>
<html>

<head>
    <title>crud arkademy</title>
</head>

<body>

    <h2>CRUD produk</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>EDIT DATA produk</h3>

    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "select * from produk where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama produk</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama_produk" value="<?php echo $d['nama_produk']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>keterangan</td>
                    <td><input type="text" name="keterangan" value="<?php echo $d['keterangan']; ?>"></td>
                </tr>
                <tr>
                    <td>harga</td>
                    <td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="SIMPAN"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>

</body>

</html>