<?php
require 'db-conft.php';
if($_SERVER["REQUEST_METHOD"]!="POST"){
  header("Location:index.php");
  exit;
}
$nama=htmlspecialchars($_POST['nama']);
$kontak=htmlspecialchars($_POST['kontak']);
$sampul=$_FILES['sampul'];
$sampulName=$sampul["name"];
$sampulFile=$sampul["tmp_name"];
move_uploaded_file($sampulFile,"img/".$sampulName);
$query="
INSERT INTO tbl_siswa (nama,kontak,sampul)
VALUES('$nama','$kontak','$sampulName')
";
$db->query($query);
if($db){
  
}
header("Location:index.php");
exit;