<!DOCTYPE html>
<html lang="en">
  <head>
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <title>WpF Degree : Contact</title>

    <!-- Mobile Specific Metas
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="img/wpf-favicon.png"/>

    <!-- CSS
    ================================================== -->       
    <!-- Bootstrap css file-->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome css file-->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Superslide css file-->
    <link rel="stylesheet" href="css/superslides.css">
    <!-- Slick slider css file -->
    <link href="css/slick.css" rel="stylesheet"> 
    <!-- Circle counter cdn css file -->
    <link rel='stylesheet prefetch' href='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/css/jquery.circliful.css'>  
    <!-- smooth animate css file -->
    <link rel="stylesheet" href="css/animate.css"> 
    <!-- preloader -->
    <link rel="stylesheet" href="css/queryLoader.css" type="text/css" />
    <!-- gallery slider css -->
    <link type="text/css" media="all" rel="stylesheet" href="css/jquery.tosrus.all.css" />    
    <!-- Default Theme css file -->
    <link id="switcher" href="css/themes/default-theme.css" rel="stylesheet">
    <!-- Main structure css file -->
    <link href="style.css" rel="stylesheet">
   
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>   
    <link href='http://fonts.googleapis.com/css?family=Varela' rel='stylesheet' type='text/css'>    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  
  </head>
  <body>

    <!-- SCROLL TOP BUTTON -->
    <a class="scrollToTop" href="#"></a>
    <!-- END SCROLL TOP BUTTON -->

    <!--=========== BEGIN HEADER SECTION ================-->
       <header id="header">
      <!-- BEGIN MENU -->
     <?php
include 'header.php';
     ?>
      <!-- END MENU -->    
    </header>
    <!--=========== END HEADER SECTION ================--> 

    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="imgBanner">
      <h2></h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN CONTACT SECTION ================-->
    <section id="contact">
      <div class="container">
       <div class="row">
          <div class="col-lg-12 col-md-12"> 
            <div class="title_area">
              <h2 class="title_two">Abacus Brain Gym</h2>
              <span></span> 
              <p>Abacus Brain Gym merupakan pelatihan otak tercanggih untuk anak usia 4-12 tahun melalui pembelajaran metode sempoa, dilengkapi dengan sesi brain gym (senam otak) dan character building (pembangunan karakter) melalui story telling (cerita), yang telah terbukti efektif.</p>
            </div>
          </div>
       </div>
       
         <div>
           <div class="fadeInLeft">
              <form class="submitphoto_form" method="POST">
              <table>
              <tr><td colspan="3">
              	<center><h1 style="margin-bottom: 20px;text-decoration: underline;font-style: bold">Formulir Pendaftaran</h1></center>
              </td></tr>
              <tr>
              	<td colspan="3"><h3 style="margin-bottom: 5px;text-decoration: underline;font-style: bold">Data Siswa</h3></td>
              </tr>
                <tr>
                	<td><font class="formdaftaran">Nama</font></td>
                	<td>:</td>
                	<td><input type="text" name="name" class="textpendaftaran"></td>
                </tr>
              	<tr>
                	<td><font  class="formdaftaran">Jenis Kelamin</font></td>
                	<td>:</td>
                	<td><input type="radio" name="gender" value="L" style="margin-left: 10px;margin-bottom: 10px">Laki-Laki <input type="radio" name="gender" value="P">Perempuan</td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Tanggal Lahir</font></td>
                	<td>:</td>
                	<td><input type="text" name="tanggallahir" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Nama Sekolah</font></td>
                	<td>:</td>
                	<td><input type="text" name="namasekolah" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Kelas</font></td>
                	<td>:</td>
                	<td><input type="text" name="kelas" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Alamat Rumah</font></td>
                	<td>:</td>
                	<td><input type="text" name="alamat" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Telp. Rumah</font></td>
                	<td>:</td>
                	<td><input type="text" name="telprumah" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">No. HP</font></td>
                	<td>:</td>
                	<td><input type="text" name="nohp" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Email</font></td>
                	<td>:</td>
                	<td><input type="text" name="email" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td colspan="3"><h3 style="margin-top: 20px;margin-bottom: 5px;text-decoration: underline;font-style: bold">Data Orangtua</h3></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Nama Ibu</font></td>
                	<td>:</td>
                	<td><input type="text" name="namaibu" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Nama Bapak</font></td>
                	<td>:</td>
                	<td><input type="text" name="namaayah" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">No.HP Ibu</font></td>
                	<td>:</td>
                	<td><input type="text" name="hpibu" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">No.HP Bapak</font></td>
                	<td>:</td>
                	<td><input type="text" name="hpayah" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Email Ibu</font></td>
                	<td>:</td>
                	<td><input type="text" name="emailibu" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Email Bapak</font></td>
                	<td>:</td>
                	<td><input type="text" name="emailayah" class="textpendaftaran"></td>
                </tr>
                <tr>
                	<td colspan="3"><h3 style="margin-top: 20px;margin-bottom: 5px;text-decoration: underline;font-style: bold">Data Tambahan</h3></td>
                </tr>
                <tr>
                	<td><font  class="formdaftaran">Sudah pernah belajar Sempoa?</font></td>
                	<td></td>
                	<td><input type="radio" name="gender" value="Y" style="margin-left: 10px;margin-bottom: 10px">Ya<input type="radio" name="gender" value="T" style="margin-left: 5px">Tidak</td>
                </tr>
                <tr>
                	<td colspan="3">Jika iya, materi apa yang terakhir kali dipelajari?</td>
                </tr>
                <tr>
                	<td colspan="3">
                		<textarea rows="4" cols="100" name="materi"></textarea>
                	</td>
                </tr>
                </table>
                <div>
                	Darimana anda mengetahui Abacus Brain Gym?(boleh pilih salah satu)<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="keluarga">Teman/Keluarga<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="web">Website Abacus Brain Gym<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="facebook">Facebook<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="insta">Instagram<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="youtube">Youtube<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="brosur">Brosur/flyer<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="spanduk">Spanduk<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="store">Store Gramedia<br>
                	<input style="margin-left: 20px" type="checkbox" name="know1" value="learning">Learning Center Abacus Brain Gym<br>
                </div>
                <input type="submit">
              </form>
           </div>
       
         <div>
         </div>
       </div>
      </div>
    </section>
    <!--=========== END CONTACT SECTION ================-->
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
     <?php
include("footer.php");
      ?>
      </footer>
      <!-- End footer top area -->

      <!-- Start footer bottom area -->
   <!--    <div class="footer_bottom">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomLeft">
                <p> Copyright &copy; All Rights Reserved</p>
              </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6">
              <div class="footer_bootomRight">
                <p>Designed by <a href="http://wpfreeware.com/" rel="nofollow">Wpfreeware.com</a></p>
              </div>
            </div>
          </div>
        </div>
      </div> -->
      <!-- End footer bottom area -->
    </footer>
    <!--=========== END FOOTER SECTION ================--> 

  

    <!-- Javascript Files
    ================================================== -->

    <!-- initialize jQuery Library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Preloader js file -->
    <script src="js/queryloader2.min.js" type="text/javascript"></script>
    <!-- For smooth animatin  -->
    <script src="js/wow.min.js"></script>  
    <!-- Bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <!-- slick slider -->
    <script src="js/slick.min.js"></script>
    <!-- superslides slider -->
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/jquery.animate-enhanced.min.js"></script>
    <script src="js/jquery.superslides.min.js" type="text/javascript" charset="utf-8"></script>   
    <!-- for circle counter -->
    <script src='https://cdn.rawgit.com/pguso/jquery-plugin-circliful/master/js/jquery.circliful.min.js'></script>
    <!-- Gallery slider -->
    <script type="text/javascript" language="javascript" src="js/jquery.tosrus.min.all.js"></script>   
   
    <!-- Custom js-->
    <script src="js/custom.js"></script>
  <!--=============================================== 
    Template Design By WpFreeware Team.
    Author URI : http://www.wpfreeware.com/
  ====================================================-->

  </body>
</html>