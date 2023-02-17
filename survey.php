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
    <title>Document</title>
</head>

<body>
    <div class="">
        <div class="row g-0">
            <div class="col-lg-5 g-0">
                <div class="leftside text-center">
                  <div class="nav" style="padding-left: 10px; padding-top: 10px; color: #44864c;font-size: 20px;" >
                    <a class="navbar-brand" href="home.php"><img src="Images/logo.png" alt="" width="60px" ><b> BPSDM Sumatera Barat</b></a>
                </div>
                    <div class="row align-items-center" style="height: 80vh;">
                        <div class="col-md-8 offset-md-2" style="padding-top:50px ;" >
                            <h2 style="font-weight: bold; ">Langkah pengisian Survey</h2><br>
                            <ol type="1" style="text-align: left;">
                                <li>Isikan Data Respondan</li>
                                <li>Jawab Pertanyaan yang ditampilkan</li>
                                <li>Berikan Saran dan Masukan</li>
                                <li>Submit dan jawaban otomatis terseimpan</li>
                            </ol>
                            
                        </div>
                        <div class="col-md-12">   
                            <img src="Images/design.png" alt="ilustrator" width="100%" height="auto">
                        </div>
                    </div>
                    <div class=" d-grid gap-2 col-5 mx-auto" style="margin-top:10px;">
                        <a class="outline" type="button" href="home.php" >Halaman Utama</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 g-0">
                <div class="rightside">
                    <div class="container">
                        <div class="row align-items-center" style="height: 100vh;">
                            <div class="col-md-10 offset-md-1">
                                <div class="horizontal_center"></div><br>
                                <h2 style="font-weight: bold;">Informasi Personal</h2>
                                <h5>Form Survey Kepuasan Masyarakat</h5><br><br>
                            <form action="aksi_survey.php" method="POST">
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Email address</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com" required>
                                  </div>
                                <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="nama" required>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Usia</label>
                                    <select class="form-select" id="usia" name="usia" aria-label="Example select with button addon" required>
                                      <option>Pilih Usia</option>
                                      <option value="19 ↓">19 ↓</option>
                                      <option value="19-25">19-25</option>
                                      <option value="25-35">25-35</option>
                                      <option value="35-55">35-55</option>
                                      <option value="55 ↑">55 ↑</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pendidikan</label>
                                    <select class="form-select" id="pendidikan" name="pendidikan" aria-label="Example select with button addon">
                                      <option selected>Pilih Pendidikan</option>
                                      <option value="SD">SD</option>
                                      <option value="SMP">SMP</option>
                                      <option value="SMA">SMA</option>
                                      <option value="D1/D2/D3">D1/D2/D3</option>
                                      <option value="D4/S1">D4/S1</option>
                                      <option value="S2/S3">S2/S3</option>
                                    </select>
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleFormControlInput1" class="form-label">Pekerjaan</label>
                                    <select class="form-select" id="pekerjaan" name="pekerjaan" aria-label="Example select with button addon">
                                      <option selected>Pilih Pekerjaan</option>
                                      <option value="Pimpinan Organisasi">Pimpinan Organisasi</option>
                                      <option value="Wiraswasta">Wiraswasta</option>
                                      <option value="PNS/TNI/Polri">PNS/TNI/Polri</option>
                                      <option value="Pegawai Swasta">Pegawai Swasta</option>
                                      <option value="Pegawai BUMN">Pegawai BUMN</option>
                                      <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                      <option value="Lainnya">Lainnya</option>
                                    </select>
                                  </div>
                                  <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Laki-Laki">
                                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                  </div>
                                  <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jk" id="jk" value="Perempuan">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                  </div>
                                  <div class="horizontal_center"></div><br>
                                  
                                  <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                    <input class="btn" type="submit" name="next" value="Next">
                                  </div>
                              </form>
                            </div>
                        </div>
                      </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
