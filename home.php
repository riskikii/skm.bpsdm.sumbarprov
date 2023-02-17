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

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>BPSDM-Survey</title>
</head>

<body>
    <!--Navbar-->
    <nav class="navbar" role="navigation">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="Images/logo.png" width="50px"><b style="color: #44864c;">  BPSDM Sumatere Barat</b>
            </a>
            <ul class="navbar-nav justify-content-end">
                <li class="nav-item">
                    <a href="#login" data-bs-toggle="modal" class="nav-link" aria-current="page"
                        style="color: #fff; font-weight: bold;">Login</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container ">
        <h1 style="padding-top: 5px;font-size: 150px;position: absolute;font-weight: 900;color: #ffffff48;">S K M</h1>
        <div class="row spasi">
            <div class="col-lg-12">
                <div class="row spasi">
                    <div class="col-lg-6 text-center">
                        <br><br><br>
                        <h1 style="color: #fff;">Survey Kepuasan Masyarakat</h1>
                        <p style="color: #fff; ">
                            Survey Kepuasan Masyarakat sebagai bentuk dalam menilai kualitas pelayanan Badan
                            Pengembangan Sumber Daya Manusia Provinsi Sumatera Barat</p>
                        <center><button type="button" class="btn " data-bs-toggle="modal"
                                data-bs-target="#staticBackdrop" style="    color: rgb(255, 255, 255);
                            padding: 5px 25px;">Mulai Survey
                            </button></center>

                    </div>
                    <div class="col-lg-6">
                        <div class="right-image">
                            <img src="Images/ilustrasi.png" alt="ilustrator" width="100%" height="auto"
                                img-size="cover">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!--NOTIFFFF-->
    <div class="modal fade" id="staticBackdrop" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h1 class="modal-title fs-5" id="exampleModalToggleLabel2">INFORMASI</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Bapak/Ibu/Saudara/i Yang Terhormat,</p>
                <p>Survei ini dibuat untuk mengetahui pendapat masyarakat/stakeholder pengguna jasa Pelayanan
                    Informasi di Badan Pengembangan Sumber Daya Manusia Provinsi Sumatera Barat. Survei ini
                    merupakan salah satu upaya kami dalam rangka meningkatkan kualitas pelayanan.</p>
                <p>Layanan Informasi LAN diberikan melalui berbagai media seperti datang langsung, email, website,
                    media sosial dan juga no hotline layanan. Standar layanan informasi adalah 1-3 hari kerja untuk
                    respond time dan 1-10 hari kerja untuk resolutif time.</p>
                <p>Pertanyaan dalam kuesioner sengaja dirancang sesederhana mungkin, untuk lebih mengefisienkan
                    waktu. Jawaban yang Bapak/Ibu/Saudara/i berikan dan hanya dipergunakan untuk kepentingan survei.
                </p>
                <p>Atas perhatian dan partisipasinya, kami ucapkan terima kasih.</p>
            </div>
            <div class="modal-footer">
              <a type="button" class="btn btn-primary"  href="survey.php">OK</a>
            </div>
          </div>
        </div>
      </div>
    
    <!--LOGINNNNNNNNN-->
    <div class="modal fade" id="login">
        <form name="login" method="POST">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="modal-title">
                            <center>
                                <h4>Login Admin</h4>
                            </center>
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                            </svg>
                                        </span>
                                        <input type="text" class="form-control" name="username" placeholder="Input Username">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-10">
                                    <div class="input-group">
                                        <span class="input-group-text" id="basic-addon1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
                                                <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"></path>
                                            </svg>
                                        </span>
                                        <input type="password" name="password" class="form-control"
                                            placeholder="Input Password">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="" class=" control-label col-sm-3"></label>
                                <center>
                                    <div>
                                        <button class="btn btn-primary" type="submit" name="login"></span> Masuk</button>
                                    </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div style="padding-bottom:20px;">
                        <center>Copyright &copy; 2023 BPSDM Provinsi Sumatra Barat<br> All rights reserved.</center>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="custom-shape-divider-bottom-1676392956">
        <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
            <path
                d="M985.66,92.83C906.67,72,823.78,31,743.84,14.19c-82.26-17.34-168.06-16.33-250.45.39-57.84,11.73-114,31.07-172,41.86A600.21,600.21,0,0,1,0,27.35V120H1200V95.8C1132.19,118.92,1055.71,111.31,985.66,92.83Z"
                class="shape-fill"></path>
        </svg>
    </div>

</body>
</html>

<?php 
include 'koneksi.php';
if (isset($_POST['login'])) {
	$username = ($_POST['username']);
	$password = ($_POST['password']);

	$query = mysqli_query($koneksi,"SELECT * FROM user WHERE username='$username' AND password='$password'");
	$line = mysqli_fetch_array($query);

	if ($line['level'] == "admin" ) {
		session_start();
		$_SESSION['username']=$username;
		echo "<script>alert('Anda Login Sebagai Admin')</script>";
		echo "<script>location='admin/index.php';</script>";
	}else{
		echo "<script>alert('Username atau Password Salah')</script>";
	}
}

 ?>