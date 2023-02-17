<?php
  include "koneksi.php";
  error_reporting(0);

if (isset($_POST['submit'])) {
    
    $sumber_layanan=$_POST['sumber_layanan'];
    $perbaikan=implode(",",$_POST['perbaikan']);
    $saran=$_POST['saran'];

    $sql2=mysqli_query($koneksi,"UPDATE jawaban_skm SET sumber_layanan='$sumber_layanan', perbaikan='$perbaikan', saran='$saran', rating=5 ORDER BY id_skm DESC LIMIT 1");
    if ($sql2) {
        echo "<center><font face='Tahoma' size='2'>
                Thnkyu Bro 
                </center>";
    }else{
        echo "<script>alert('Ada data yang belum terisi');
        window.location='survey2.php';</script>";
    }
    }



// $xyz=implode(",",$language);
// //echo $xyz;