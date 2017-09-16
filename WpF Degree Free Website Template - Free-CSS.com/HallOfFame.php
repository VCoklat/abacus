
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
     <title>Abacus Brain Gym</title>

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
    <style type="text/css">
      .butt{
        background-color: yellow;
        width: 200px;
        height: 100px;
        border: 1px solid blue;
        font-size: 20px;
      }

      li{
        display: inline-block;
       
      }

      td{
        border: 1px solid black;
        width: 100px;
        text-align: center;
      }
      .namebest{
        background-color: green;
        font-size: 20px;
        text-align: center;
        font-weight: bold;
        color: black
      }
    </style>
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
      <h2>Hall Of Fame</h2>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN COURSE BANNER SECTION ================-->
    <section id="courseArchive">
      <div class="container">
      
          <!-- start course content -->
          <div class="col-lg-8 col-md-8 col-sm-8">
           
              <!-- start blog archive  -->
            
                <!-- start single blog -->
                
                  <div class="single_blog">                    
                    <h2 class="blog_title"><a href="Hall Of Fame.php">Hall Of Fame</a></h2>
                    <div class="tabelganti" style="margin-bottom: 10px;">
                    <table>
                    <tr>
                    <td>
                    <button class="butt" onclick="klikini(0)" style="background-color: red">Daily</button></td>
                    <td>
                    <button class="butt" onclick="klikini(1)">Weekly</button></td>
                    <td>
                    <button class="butt" onclick="klikini(2)">Monthly</button></td>
                    <td>
                    <button class="butt" onclick="klikini(3)">Annual</button></td>
                    </tr>
                  </table>
                  </div>
                  <div class="tabelNama" style="margin-bottom: 10px">
                  <div class="namebest" style="margin-bottom: 10px">BEST CHAMPION OF THE DAY</div>
                    <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  </div>
                  <div class="tabelNama" style="margin-bottom: 10px;display: none">
                  <div class="namebest" style="margin-bottom: 10px">BEST CHAMPION OF THE WEEK</div>
                    <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  </div>
                  <div class="tabelNama" style="margin-bottom: 10px;display: none">
                  <div class="namebest" style="margin-bottom: 10px">BEST CHAMPION OF THE MONTH</div>
                    <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  </div>
                  <div class="tabelNama" style="margin-bottom: 10px;display: none">
                  <div class="namebest" style="margin-bottom: 10px">BEST CHAMPION OF THE YEAR</div>
                    <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  </div>
                  <div class="namebest" style="margin-bottom: 10px"> TOP 3 CHAMPIONS at the current TIME</div>
                  <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  <div class="namebest" style="margin-bottom: 10px;margin-top: 10px" >In The Hunt</div>
                  <table>
                    <tr>
                    <td>No. </td>
                    <td>Name</td>
                    <td>Count</td>
                    <td>Score</td>
                    <td>Country  </td>
                    </tr>
                    </table>
                  </div>
                  
         
          </div>
          <!-- End course content -->

      </div>
      </div>
    </section>
    <!--=========== END COURSE BANNER SECTION ================-->
    
    <!--=========== BEGIN FOOTER SECTION ================-->
    <footer id="footer">
      <!-- Start footer top area -->
      <?php
include 'footer.php';
      ?>
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
  <script type="text/javascript">
            var x =1;
            function klikini(x){
             
              var data=  document.getElementsByClassName("tabelNama");
              var data2 = document.getElementsByClassName("butt");
              for (var i = 0; i < data.length; i++) {
                  data[i].style.display = "none";           
                              }
              for (var i = 0; i < data2.length; i++) {
                   data2[i].style.background = "yellow";           
                  }             
                data[x].style.display = "block";
                data2[x].style.background = "red";
            }
          </script>
</html>
