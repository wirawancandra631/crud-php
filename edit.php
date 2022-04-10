<?php
require 'db-conft.php';
$id=$_GET['id'];
$data=selectWhere('tbl_siswa','id',$id)[0];
if(isset($_POST['edit'])){
  edit($_POST,$id);
  header("Location:index.php");
  exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Crud Sederhana</title>
  <link rel="stylesheet" href="style/style.css">
</head>
<body>
     <form action="" method="post" enctype="multipart/form-data" class="edit">
     <h5>Edit Data</h5>
       <input type="text" name="nama" id="nama" placeholder="nama"required="" value="<?=$data['nama']?>">
       <input type="number" name="kontak" id="kontak" placeholder="kontak" required="" value="<?=$data['kontak']?>">
       <input type="file" name="sampul" id="sampul" required="">
      <div class="btn">
        <button type="submit" class="submit" name="edit">Edit</button>
        <button type="reset" class="reset" >Reset</button>
      </div>
     </form>
  
  
</body>
</html>