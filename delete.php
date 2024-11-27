<?php
require_once "koneksi.php";
$nomer=$_GET['id'];
$query="DELETE FROM tab1 WHERE tab1.nomer = $nomer";
$result=mysqli_query($koneksi,$query);
if($result){
   header("location: update.php");
}else{
    echo "Data gagal dihapus";
}
?>
