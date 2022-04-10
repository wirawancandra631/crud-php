<?php
$db=new mysqli('localhost','root','','siswa');
function selectAll(string $table){
  global $db;
  $query=$db->query("SELECT * FROM $table");
  $rows=[];
  while($row=$query->fetch_assoc()){
    $rows[]=$row;
  }
  return $rows;
}
function selectWhere(string $table,$key,$value){
  global $db;
  $query=$db->query("SELECT * FROM $table WHERE $key='$value'");
  $rows=[];
  while($row=$query->fetch_assoc()){
    $rows[]=$row;
  }
  return $rows;
}

function edit($data,$id){
  global $db;
  $nama=htmlspecialchars($data['nama']);
  $kontak=htmlspecialchars($data['kontak']);
  $sampul=$_FILES['sampul'];
  $sampulName=$sampul["name"];
$sampulFile=$sampul["tmp_name"];
move_uploaded_file($sampulFile,"img/".$sampulName);
$query=$db->query("
UPDATE tbl_siswa SET nama='$nama',kontak='$kontak',sampul='$sampulName' WHERE id='$id'
");

}