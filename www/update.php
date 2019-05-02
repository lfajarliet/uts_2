<?php
 include "db.php";
 if(isset($_POST['update']))
 {
 $id=$_POST['id'];
 $nama=$_POST['nama'];
 $alamat=$_POST['alamat'];
 $nomor=$_POST['nomor'];
 $q=mysqli_query($con,"UPDATE `data_kontak` SET `nama`='$nama',`alamat`='$alamat',`nomor`='$nomor' where `id`='$id'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>