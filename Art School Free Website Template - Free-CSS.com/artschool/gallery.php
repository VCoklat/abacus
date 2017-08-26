<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School | Gallery</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/demo.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/uCarousel.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document)
    .ready(function () {
    $('.gallery')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: '.play',
        duration: 700,
        preset: 'fade',
        pagination: $('.img-pags')
            .uCarousel({
            show: 2,
            shift: 0,
            rows: 4
        }),
        pagNums: false,
        slideshow: 7000,
        numStatus: true,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
})
</script>
<!--[if lt IE 9]>
<script src="js/html5.js"></script>
<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
<![endif]-->
</head>
<body>
<div class="main">
  <!--==============================header=================================-->
  <header>
    <h1><a href="index.html"><img src="images/logo.png" alt=""></a></h1>
    <nav>
      <div id="slide">
        <div class="gallery">
          <ul class="items">
            <li><img src="images/gallery-big-1.jpg" alt=""></li>
            <li><img src="images/gallery-big-2.jpg" alt=""></li>
            <li><img src="images/gallery-big-3.jpg" alt=""></li>
            <li><img src="images/gallery-big-4.jpg" alt=""></li>
            <li><img src="images/gallery-big-5.jpg" alt=""></li>
            <li><img src="images/gallery-big-6.jpg" alt=""></li>
            <li><img src="images/gallery-big-7.jpg" alt=""></li>
            <li><img src="images/gallery-big-8.jpg" alt=""></li>
          </ul>
        </div>
        <a href="#" class="prev"></a><a href="#" class="next"></a> </div>
     <div style="width: 100%;
        text-align: center; margin-top:40px;">
      <ul class="menu" >
        <li class="current"><a href="index.php" class="clr-1">Home</a></li>
        <li><a href="about.php" class="clr-2">About Us</a></li>
        <li><a href="schedule.php" class="clr-3">Our Programme</a></li>
        <li><a href="gallery.php" class="clr-4">Hall Of Fame</a></li>
        <li><a href="contacts.php" class="clr-5">Testimony</a></li>
    <li><a href="contacts.php" class="clr-5">FAQ</a></li>
    <li><a href="contacts.php" class="clr-5">Contacts</a></li>
    <li><a href="contacts.php" class="clr-5">Enroll Now</a></li>
      </ul>
     </div>
    </nav>
  </header>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <h2 class="top-6 p2">Our Archive</h2>
        <ul class="list-1">
          <li><a href="#">April, 2012</a></li>
          <li><a href="#">March, 2012</a></li>
          <li><a href="#">February, 2012</a></li>
          <li><a href="#">January, 2012</a></li>
          <li><a href="#">December, 2011</a></li>
          <li><a href="#">November, 2011</a></li>
          <li><a href="#">October, 2011</a></li>
          <li><a href="#">September, 2011</a></li>
          <li><a href="#">August, 2011</a></li>
          <li><a href="#">July, 2011</a></li>
          <li><a href="#">June, 2011</a></li>
          <li><a href="#">May, 2011</a></li>
        </ul>
      </div>
      <div class="grid_8">
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6 p4">Our Gallery</h2>
            <div class="pag">
              <div class="img-pags">
                <ul>
                  <li><a href="#"><span><img src="images/gallery-1.jpg" alt="" class="img-border"> <strong class="text-2">Jennifer, 10 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-2.jpg" alt="" class="img-border"> <strong class="text-2">Sebastian, 14 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-3.jpg" alt="" class="img-border"> <strong class="text-2">Peter, 9 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-4.jpg" alt="" class="img-border"> <strong class="text-2">Samuel, 15 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-5.jpg" alt="" class="img-border"> <strong class="text-2">Martin, 13 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-6.jpg" alt="" class="img-border"> <strong class="text-2">Fiona, 8 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-7.jpg" alt="" class="img-border"> <strong class="text-2">Monica, 7 years</strong></span></a></li>
                  <li><a href="#"><span><img src="images/gallery-8.jpg" alt="" class="img-border"> <strong class="text-2">Fiona, 8 years</strong></span></a></li>
                </ul>
              </div>
            </div>
            <div class="clear"></div>
            <div class="pad-2"> <a href="#" class="link-2">Full Gallery</a> </div>
          </div>
        </div>
        <!--==============================footer=================================-->
        
      </div>
      <div class="clear"></div>
    </div><footer>
       <?php 
            require('footer.php');
          ?>
        </footer>
  </section>
</div>
</body>
</html>
