<?php
include 'conn.php';

$req = $_POST;
$nama;

if ($_FILES['gambar']['name']) {
 $ekstensi_diperbolehkan = array('png', 'jpg', 'jpeg');
 $nama                   = "images/" . $_FILES['gambar']['name'];
 $x                      = explode('.', $nama);
 $ekstensi               = strtolower(end($x));
 $ukuran                 = $_FILES['gambar']['size'];
 $file_tmp               = $_FILES['gambar']['tmp_name'];
 if (in_array($ekstensi, $ekstensi_diperbolehkan) === true) {
  move_uploaded_file($file_tmp, $nama);
 } else {
  echo 'EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN';
 }
}


$sql = "INSERT INTO toko_hp (Merk_HP, Harga, Spesifikasi, Gambar) VALUES ( '" . $req['merk'] . "' , '" . $req['harga'] . "', '" . $req['spek'] . "', '" . $nama . "')";

if (mysqli_query($conn, $sql)) {
 header('Location: index.php');
} else {
 echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//  var_dump($req);
