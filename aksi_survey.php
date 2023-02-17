<?php 
error_reporting(0);
include "koneksi.php";

if (isset($_POST['next'])) {
    $email=$_POST['email'];
    $nama=$_POST['nama'];
    $usia=$_POST['usia'];
    $pendidikan=$_POST['pendidikan'];
    $pekerjaan=$_POST['pekerjaan'];
    $jk=$_POST['jk'];

    $sql=mysqli_query($koneksi,"INSERT INTO jawaban_skm(nama,email,usia,pendidikan,pekerjaan,jenis_kelamin,sumber_layanan,perbaikan,saran,rating) VALUES ('$nama','$email','$usia','$pendidikan','$pekerjaan','$jk','Null','Null','Null','Null')");
    if (empty($sql)){
        echo "<script lang=javascript>
             window.alert('Anda belum mengisi kuisioner atau ada kuisioner yang belum terisi..!');
             history.back();
             </script>";
          exit;
    }
    if ($sql) {
        echo "<script>
        window.location='survey2.php';</script>";
    }else{
        echo "<script>alert('Data Not Insrted');
        window.location='survey.php';</script>";
    }
    }



// $xyz=implode(",",$language);
// //echo $xyz;