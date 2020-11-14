<!DOCTYPE html>
<html>

<head>
    <title>crud arkademy</title>
</head>

<body>

    <h2>crud produk</h2>
    <br />
    <a href="index.php">KEMBALI</a>
    <br />
    <br />
    <h3>Tambah data produk</h3>
    <form method="post" action="tambah_aksi.php">
        <table>
            <tr>
                <td>Nama produk</td>
                <td><input type="text" name="nama_produk"></td>
            </tr>
            <tr>
                <td>keterangan</td>
                <td><input type="text" name="keterangan"></td>
            </tr>
            <tr>
                <td>harga</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td>jumlah</td>
                <td><input type="text" name="jumlah"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="simpan"></td>
            </tr>
        </table>
    </form>
</body>

</html>