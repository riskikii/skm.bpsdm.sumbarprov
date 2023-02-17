<?php 
include '../koneksi.php';
session_start();
if (!isset($_SESSION['username'])) {
	echo "<script>alert('Anda Gagal Login')</script>";
	echo "<script>location='../home.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js">
  <link rel="shortcut icon" href="https://images.pexels.com/photos/1236701/pexels-photo-1236701.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="../css/cssbaru.css"/>
  <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">

  <!—Compiled and minified Jquery -->
     <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

     <!-- Compiled and minified JavaScript -->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>

     <body>

          <nav>
               <div class="nav-wrapper toska">
                    <a href="#" data-activates="slide-out" class="button-collapse show-on-medium-and-up">
                         <i class="material-icons">menu</i></a>
                         <a href="#" class="brand-logo" style="margin-left:150px; font-family:helvetica;">SKM-BPSDM Sumatera Barat</a>
                         <a class='dropdown-trigger right hide-on-med-and-down' href='#' data-target='dropdown1'  style="margin-right:15px">
                              <i class="material-icons">settings</i></a>

                              <!-- Dropdown Structure -->
                              <ul id="dropdown1" class="dropdown-content"><li><a  href="../logout.php"><i class="material-icons">logout</i>Logout</a></li>
                              </ul>



                              </div>
                         </nav>
                         <ul id="slide-out" class="sidenav" class=" white-text right hide-on-med-and-down" >
                              <li class="sidenav-header toska" >
                                   <center>    
                                        <div>
                                             <img class="circle" src="../images/profiluser.png" width="75" height="75" style="margin-top:24px; ">
                                        </div>
                                        <a class="putihh ">Welcome, <?php echo $_SESSION['username']; ?></a>
                                   </center>
                              </li>
                              <br>
                              <li><a href="index.php?p=dashboard"> <i class="material-icons">home</i>Dashboard</a></li>
                              <li><a href="index.php?p=jawaban"> <i class="material-icons">archive</i>Rekap Survey</a></li>
                         </ul>




                         <div class="" style="margin-left: 200px; margin-right:200px;">
                            <?php 
                            if(@$_GET['p']==""){
                                 include_once 'dashboard.php';
                            }
                            elseif (@$_GET['p']=="dashboard") {
                               include_once 'dashboard.php';
                          }
                          elseif (@$_GET['p']=="jawaban") {
                               include_once 'jawaban.php';
                          }
                          elseif (@$_GET['p']=="rekapsurvey") {
                              include_once 'rekapsurvey.php';
                         }
                          ?>
                     </div>


                     <script type="text/javascript" src="../js/materialize.min.js"></script>
                     <script type="text/javascript">
                        $(document).ready(function(){
                           $('.materialboxed').materialbox();
                           $('.sidenav').sidenav();
                           $(".button-collapse").sideNav();
                           $('.dropdown-trigger').dropdown();
                           $('.datepicker').datepicker();



                      });

                 </script>

            </body>
<!--   <footer class="red lighten-1" >
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-2" href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank"></a> All rights reserved.</span>
            <span class="right hide-on-small-only"> Design and Developed by <a class="grey-text text-lighten-2" href="">Information System FTIUA</a></span>
          </div>
        </div>
   </footer> -->

   </html>