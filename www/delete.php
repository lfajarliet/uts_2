<?php
 include "db.php";
 if(isset($_GET['nama']))
 {
 $nama=$_GET['nama'];
 $q=mysqli_query($con,"delete from `dataku` where `nama`='$nama'");
 if($q)
 echo "success";
 else
 echo "error";
 }
 ?>