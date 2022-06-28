<?php

include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");

$posts = array();
$postsTitle = 'Last Devices';

if (isset($_GET['t_id'])) {
  $posts = getPostsByTopicId($_GET['t_id']);
  $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
  $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
  $posts = searchPosts($_POST['search-term']);
} else {
  $posts = getPublishedPosts();
}




?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet">

  <!-- from viraj -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">


  <!-- Custom Styling -->
  <link rel="stylesheet" href="assets/css/style.css">

  <title>Lecture</title>
</head>

<body>
    <!-- Load Facebook SDK for JavaScript -->
      <div id="fb-root"></div>
      <script>
        window.fbAsyncInit = function() {
          FB.init({
            xfbml            : true,
            version          : 'v10.0'
          });
        };

        (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/tr_TR/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));</script>

      <!-- Your Chat Plugin code -->
      <div class="fb-customerchat"
        attribution="setup_tool"
        page_id="106638884795070"
  theme_color="#008489"
  logged_in_greeting="Hi, Welcome ! "
  logged_out_greeting="Hi, Welcome ! ">
      </div>

  <?php include(ROOT_PATH . "/app/includes/header.php"); ?>
  <?php include(ROOT_PATH . "/app/includes/messages.php"); ?>




<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> Click on the picture which you want to see on map </h2>
</div>
<div class = "container-fluid">
<div class ="row">
  <div class = "col-lg-4 col-md-4 col-12">
    <a target="_blank" href="https://www.google.com/maps/place/Loktak+Lake/@24.5534376,93.8108396,13z/data=!3m1!4b1!4m5!3m4!1s0x37493416caa759a7:0x9c989130312efe8e!8m2!3d24.5593375!4d93.8146526">
     <img src="images/nature/loktak.jpg" class= "img-fluid pb-3">
   </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
   <a target="_blank" href="https://www.google.com/maps/place/Valley+of+Flowers+National+Park/@30.72804,79.605303,15z/data=!4m2!3m1!1s0x0:0x1f42050f9b6c125f?sa=X&ved=2ahUKEwiuibap7s34AhXj-ioKHbNPDOwQ_BJ6BAhuEAU">
    <img src="images/nature/valleyofflowers.webp" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?q=Gurudongmar+Lake,+Sikkim&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjjreGmls74AhWJUXcKHTO3CpcQ_AUoAXoECAIQAw">
    <img src="images/nature/gurudongmar.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?q=Lonar+Lake,+Maharashtra&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiXsb_Dls74AhXQFXcKHUfxBtIQ_AUoAXoECAIQAw">
    <img src="images/nature/lonarlake.webp" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?q=Nubra+Valley,+Ladakh&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjtmY7Olc74AhVxBhAIHSaOB4EQ_AUoAnoECAIQBA">
    <img src="images/nature/nubra.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?q=Yumthang+Valley,+Sikkim&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjXzau-lc74AhUE-yoKHVFKDoAQ_AUoAnoECAIQBA">
    <img src="images/nature/yumthang.jpg" class= "img-fluid pb-3">
  </a>
</div>
</div>
</div>
</section>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- // Page Wrapper -->
  <?php include(ROOT_PATH . "/app/includes/footer.php"); ?>
  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

  <!-- Slick Carousel -->
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

  <!-- Custom Script -->
  <script src="assets/js/scripts.js"></script>

</body>

</html>
