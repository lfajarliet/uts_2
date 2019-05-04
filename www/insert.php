<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nomor=$_POST['nomor'];
 $q=mysqli_query($con,"INSERT INTO `data_kontak` (`id`,`nama`,`alamat`,`nomor`) VALUES ('$id','$nama','$alamat','$nomor')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>