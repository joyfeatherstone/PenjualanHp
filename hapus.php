<?php
 include 'conn.php';
 

 $req = $_GET;


 $sql = "DELETE FROM toko_hp WHERE ID_HP= '".$req['id']."'";

if (mysqli_query($conn, $sql)) {
  header('Location: index.php');
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 

//  var_dump($req);