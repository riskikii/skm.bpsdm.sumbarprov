<?php
  include "koneksi.php";
  error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
  <title>Form Survey BPSDM Sumbar</title>
  <link rel="shortcut icon" href="../Images/logoSumbar.png" type="image/x-icon">
</head>

<body>
  <div class="">
    <form action="" method="POST">
    <div class="row g-0">
      <div class="col-lg-5 g-0">
        <div class="leftside">
        <div class="nav" style="padding-left: 10px; padding-top: 10px; color: #44864c;font-size: 20px;" >
                    <a class="navbar-brand" href="home.php"><img src="Images/logo.png" alt="" width="60px" ><b> BPSDM Sumatera Barat</b></a>
                </div>
          <div class="container">
            <div class="row align-items-center" style="height: 80vh;">
              <div class="col-md-8 offset-md-2">
                <center>
                  <h5>Silahkan berikan rating secara keseluruhan terhadap layanan kami</h5>
                  <p>(Pilih pada bintang dibawah ini)</p>
                </center><br>
                  <div class="row" style="background-color: #fff;padding-top: 30px;padding-bottom: 20px; border-radius: 50px;">
                      <div class="star-rating">
                        <input type="radio" name="rating" id="star-a" value="5" />
                        <label for="star-a"></label>
              
                        <input type="radio" name="rating" id="star-b" value="4" />
                        <label for="star-b"></label>
              
                        <input type="radio" name="rating" id="star-c" value="3" />
                        <label for="star-c"></label>
              
                        <input type="radio" name="rating" id="star-d" value="2" />
                        <label for="star-d"></label>
              
                        <input type="radio" name="rating" id="star-e" value="1" />
                        <label for="star-e"></label>
                      </div>
                  </div>
               
                <div>
                  <center><h1 style="color: #0d6efd;">Sangat Puas</h1></center>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-7 g-0">
        <div class="rightside">
          <div class="container survey2">
            <div class="row align-items-center" style="height: 100vh" ;>
              <div class="col-md-10 offset-md-1">
                <div class="horizontal_center"></div><br>
                  <h5>1. Melalui media apa Saudara/i mendapatkan layanan informasi?</h5>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="Datang Langsung">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Datang Langsung
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="E-mail">
                        <label class="form-check-label" for="flexRadioDefault2">
                          E-mail
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="Website">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Website
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="Media Sosial">
                        <label class="form-check-label" for="flexRadioDefault1">
                          Media Sosial (Facebook, Instagram, dll)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="Hotline">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Nomor Hotline Layanan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="sumber_layanan" id="sumber_layanan" value="Lainnya">
                        <label class="form-check-label" for="flexRadioDefault2">
                          Lainnya
                        </label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <h5>2.Menurut saudara/i hal apa yang perlu diperbaiki terhadap layanan kami?</h5>
                  <p>(pilihlahan dapat lebeih dari 1)</p>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]" value="Persyaratan">
                        <label class="form-check-label" for="flexCheckDefault">
                          Persyaratan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]" value="Produk Layanan">
                        <label class="form-check-label" for="flexCheckChecked">
                          Produk Layanan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]" value="Perilaku Petugas">
                        <label class="form-check-label" for="flexCheckDefault">
                          Perilaku Petugas
                        </label>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]" value="Kesigapan Petugas" >
                        <label class="form-check-label" for="flexCheckDefault">
                          Kesigapan Petugas
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]" value="Penanganan Pengaduan" >
                        <label class="form-check-label" for="flexCheckDefault">
                          Penanganan Pengaduan
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="perbaikan[]"value="Informasi Layanan">
                        <label class="form-check-label" for="flexCheckDefault">
                          Informasi Layanan
                        </label>
                      </div>
                    </div>
                  </div>
                  <br>
                  <h5>3. Mohon Saran/Masukan anda untuk peningkatan kualitas layanan kami !</h5>
                  <div class="mb-3">
                    <textarea class="form-control" name="saran" id="saran" rows="6"></textarea>
                  </div><br>
                  <div class="horizontal_center"></div><br>
                  <div class="d-grid gap-2 col-3 mx-auto">
                  <input class="btn" type="submit" name="submit" value="Submit">
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    </form>
  </div>

<?php

if (isset($_POST['submit'])) {
    
    $sumber_layanan=$_POST['sumber_layanan'];
    $perbaikan=implode(",",$_POST['perbaikan']);
    $saran=$_POST['saran'];
    $rating=$_POST['rating'];

    $sql2=mysqli_query($koneksi,"UPDATE jawaban_skm SET sumber_layanan='$sumber_layanan', perbaikan='$perbaikan', saran='$saran', rating='$rating' ORDER BY id_skm DESC LIMIT 1");
    if ($sql2) {
    ?>
      echo "<script>alert('Kami menjamin dan melinduingi identitas anda, saran dan masukan anda akan sangat berharga bagi kami Terimakasih atas waktunya,');window.location='home.php';</script>";
      <?php
    }else{
        echo "<script>alert('Ada data yang belum terisi');
        window.location='survey2.php';</script>";
    }
  }
?>  

</body>
</html>
