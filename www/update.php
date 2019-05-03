<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nomor=$_POST['nomor'];
 $q=mysqli_query($con,"UPDATE `dataku` SET `nama`='$nama',`alamat`='$alamat',`nomor`='$nomor'  where `nama`='$nama'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>