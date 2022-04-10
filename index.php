<?php
require 'db-conft.php';
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
 <div class="content">
   <div class="form">
     <form action="save.php" method="post" enctype="multipart/form-data">
     <h5>Tambah Data</h5>
       <input type="text" name="nama" id="nama" placeholder="nama"req>
       <input type="number" name="kontak" id="kontak" placeholder="kontam" required="">
       <input type="file" name="sampul" id="sampul" required="">
      <div class="btn">
        <button type="submit" class="submit">Upload</button>
        <button type="reset" class="reset">Reset</button>
      </div>
     </form>
   </div>
   <div class="data">
     <table border="1">
       <tr style="text-align:center;">
         <th>No</th>
         <th>Nama</th>
         <th>Kontak</th>
         <th>Sampul</th>
         <th>Opsi</th>
       </tr>
       <?php $i=1;?>
       <?php foreach(selectAll('tbl_siswa') as $data):?>
       <tr style="text-align:center;">
         <td><?=$i++?></td>
         <td><?=$data['nama']?></td>
         <td><?=$data['kontak']?></td>
         <td>
           <img src="img/<?=$data['sampul']?>" width="50px" height="50px">
         </td>
         <td>
           <a href="delete.php?id=<?=$data['id']?>">H</a>
           <a href="edit.php?id=<?=$data['id']?>">E</a>
         </td>
       </tr>
       <?php endforeach;?>
     </table>
   </div>
 </div>
  
</body>
</html>