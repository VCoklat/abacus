<!DOCTYPE html>
<html lang="en">
<head>
<title>Art School | Contacts</title>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
<link rel="stylesheet" type="text/css" media="screen" href="css/slider.css">
<link href='http://fonts.googleapis.com/css?family=Cabin+Sketch:400,700' rel='stylesheet' type='text/css'>
<script src="js/jquery-1.7.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.4.1.js"></script>
<script>
$(document)
    .ready(function () {
    $('.slider')
        ._TMS({
        show: 0,
        pauseOnHover: true,
        prevBu: '.prev',
        nextBu: '.next',
        playBu: false,
        duration: 800,
        preset: 'fade',
        pagination: true,
        pagNums: false,
        slideshow: 7000,
        numStatus: false,
        banners: false,
        waitBannerAnimation: false,
        progressBar: false
    })
});
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
  <?php
include('header.php');
  ?>
  </header>
  <br>
  <!--==============================content================================-->
  <section id="content">
    <div class="container_12">
      <div class="grid_4 bot-1">
        <h2 class="top-6">Contact Us</h2>
        <div class="map">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.974127212459!2d106.66493331431369!3d-6.267132995463832!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb0660a81a35%3A0x6774b61b6ecca67d!2sAbacus+Brain+Gym+Indonesia!5e0!3m2!1sen!2sid!4v1503743812694" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
        <dl>
          <dt style="color: skyblue">Jl. BSD Raya Utama No.22, Pagedangan,<br>
Kota Tangerang<br>
          <dd style="color: skyblue"><span>Telephone: </span>(021) 30048138</dd>
          <dd style="color: skyblue"><span>facebook : </span> @abacusbraingymID</dd>
        </dl>
      </div>
      <div class="grid_8">
        <div class="block-1 top-5">
          <div class="block-1-shadow">
            <h2 class="clr-6">Contact Form</h2>
            <form id="form" method="post" action="#">
              <fieldset>
                <label><strong>Name:</strong>
                  <input type="text" value="">
                  <strong class="clear"></strong></label>
                <label><strong>Email:</strong>
                  <input type="text" value="">
                  <strong class="clear"></strong></label>
                <label><strong>Phone:</strong>
                  <input type="text" value="">
                  <strong class="clear"></strong></label>
                <label><strong>Message:</strong>
                  <textarea></textarea>
                  <strong class="clear"></strong></label>
                <strong class="clear"></strong>
                <div class="btns pad-2"><a href="#" class="link-2">Clear</a><a href="#" class="link-2">Send</a></div>
              </fieldset>
            </form>
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
