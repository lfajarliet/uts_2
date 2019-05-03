<?php
 include "db.php";
 if(isset($_POST['insert']))
 {
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nomor=$_POST['nomor'];
 $q=mysqli_query($con,"INSERT INTO `dataku` (`nama`,`alamat`,`nomor`) VALUES ('$nama','$alamat','$nomor')");
 if($q)
  echo "success";
 else
  echo "error";
 }
 ?>