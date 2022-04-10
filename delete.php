<?php
require 'db-conft.php';
$id=$_GET['id'];
$db->query("DELETE FROM tbl_siswa WHERE id='$id'");
header("Location:index.php");
exit;