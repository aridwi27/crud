<!DOCTYPE html>
<html>

<head>
    <title>crud arkademy</title>
</head>

<body>

    <h2>CRUD Produk</h2>
    <br />
    <a href="tambah.php"> tambah produk</a>
    <br />
    <br />
    <table border="1">
        <tr>
            <th>NO</th>
            <th>nama produk</th>
            <th>keterangan</th>
            <th>harga</th>
            <th>jumlah</th>
            <th>aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from produk");
        while ($a = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $a['nama_produk']; ?></td>
                <td><?php echo $a['keterangan']; ?></td>
                <td><?php echo $a['harga']; ?></td>
                <td><?php echo $a['jumlah']; ?></td>

                <td>
                    <a href="edit.php?id=<?php echo $a['id']; ?>">EDIT</a>
                    <a href="hapus.php?id=<?php echo $a['id']; ?>">HAPUS</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>