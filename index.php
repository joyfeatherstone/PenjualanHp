<?php
include 'conn.php';

$sql    = "SELECT * FROM toko_hp";
$result = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PenjualanHP</title>
</head>
<link rel="stylesheet" href="css/bootstrap.min.css">

<body>
    <div class="container mt-4">
        <a href="tambah.html">
            <button class="btn border-primary text-primary mb-3 bg-white">Tambah</button>
        </a>
        <div class="row rounded border px-3">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Merk Handphone</th>
                        <th scope="col">Harga</th>
                        <th scope="col">Spesifikasi</th>
                        <th scope="col">Gambar</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
while ($row = $result->fetch_assoc()) {
 ?>
                    <tr>
                        <th scope="row"><?php echo $row["ID_HP"]; ?></th>
                        <td><?php echo $row["Merk_HP"]; ?></td>
                        <td><?php echo $row["Harga"]; ?></td>
                        <td><?php echo $row["Spesifikasi"]; ?></td>
                        <td><img src="<?php echo $row["Gambar"]; ?>" width="60" ></td>
                        <td>
            <button class="btn btn-primary">Edit</button>
<a href="hapus.php?id=<?php echo $row['ID_HP'] ?>" >               <button type="submit" class="btn btn-danger">Hapus</button></a>

                        </td>
                    </tr>
                    <?php
}
?>
            </table>
        </div>
    </div>
</body>

</html>
