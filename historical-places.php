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
    <a target="_blank" href="https://www.google.com/maps?q=Taj+Mahal+india&sxsrf=ALiCzsZXnnKSKXJixz_OETlaClX30L8tsQ:1656351893507&uact=5&gs_lcp=Cgdnd3Mtd2l6EAMyBQgAEMsBMggIABCABBDJAzIECAAQQzIKCAAQgAQQhwIQFDIKCAAQgAQQhwIQFDIFCAAQgAQyBQgAEIAEMgUIABCABDIFCAAQgAQyBQgAEIAEOgcIABBHELADOgcIABCwAxBDOgoIABDkAhCwAxgBOhIILhDHARCvARDIAxCwAxBDGAI6FQguEMcBEK8BENQCEMgDELADEEMYAjoPCC4Q1AIQyAMQsAMQQxgCOgQILhBDOgoILhDHARCvARBDOgsILhCABBDHARCvAToFCC4QywE6DgguEMcBEK8BENQCEMsBOggILhDUAhDLAUoECEEYAEoECEYYAVBzWMYWYLcYaAFwAXgAgAF7iAHVBJIBAzQuMpgBAKABAcgBE8ABAdoBBggBEAEYCdoBBggCEAEYCA&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjxn-ril874AhUEgosKHTJOBuoQ_AUoAnoECAIQBA">
     <img src="images/historical/taj-mahal.webp" class= "img-fluid pb-3">
   </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
   <a target="_blank" href="https://www.google.com/maps/place/Agra+Fort/@27.1797876,78.0158882,15z/data=!4m9!1m2!2m1!1sAgra+Fort!3m5!1s0x397470d491343beb:0x640a5ccc94029576!8m2!3d27.1795328!4d78.021112!15sCglBZ3JhIEZvcnRaCyIJYWdyYSBmb3J0kgEIZm9ydHJlc3OaASRDaGREU1VoTk1HOW5TMFZKUTBGblNVUlJOVFUzVjE5UlJSQUI">
    <img src="images/historical/agra-fort.webp" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?q=Hawa+Mahal&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjR1rzumM74AhUWgosKHTWLB3oQ_AUoAnoECAEQBA">
    <img src="images/historical/hawa-mahal.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?um=1&ie=UTF-8&sa=X&ved=2ahUKEwjR1rzumM74AhUWgosKHTWLB3oQ_AUoAnoECAEQBA&q=Amber+Fort&lei=9O25YqeOGo-orgTwjK2IBg">
    <img src="images/historical/amer-fort.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsZfm6C4Q29TGtVApFpXfVP3N9TFfw:1656352221907&stick=H4sIAAAAAAAAAONQFuLUz9U3MMs2L0xWAjMtDLPKjE8xIoShbGRx8yIz88JTjBwgdo5FchJU2Dg5PsMCyjbNrSwug7KNcsyrCqFsE3NLi-RfjMpBqTmJJakpCiX5Ch6J5YkKvokZiTkKiXkpCo7pRYkKbvlFJbtYEI6AssG6F7FyOeYmpRaBFU1gY7zFJslg-rGVKfqeieHuvMXfPh37InB70uxtG9587wcAH6bOtuEAAAA&um=1&ie=UTF-8&sa=X&ved=2ahUKEwji8O3_mM74AhXwmIsKHQGhDWwQ_AUoAnoECAIQBA&q=Jantar+Mantar+-+Jaipur&lei=BO65YtTJIovbrgS_3ragCQ">
    <img src="images/historical/jantar-mantar.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsZQkYnHE_kKDjHJSPiYLwKN-wV7Sg:1656352258363&stick=H4sIAAAAAAAAAONQFuLUz9U3MMs2L0xWAjPNi8zMC08xIoShbAvDrDJjKBuqhgPEzrFIToIKGyfHZ1hA2aa5lcVlULZRjnkVzEgTc0uL5F-MykGpOYklqSkKJfkKHonliQq-iRmJOQqJeSkKjulFiQpu-UUlu1gQjoCywboXsYp5JeaVJBYBNYEpXQWvxMyC0qIJbIy32CQZTD-2MkXfMzHcnbf426djXwRuT5q9bcOb7_0AwdUkaO0AAAA&um=1&ie=UTF-8&sa=X&ved=2ahUKEwjO76aImc74AhUQAhAIHS7FDEMQ_AUoAnoECAIQBA&q=Qutb+Minar&lei=F-65YtalJdiQwPAP8o-V6AI">
    <img src="images/historical/qutab.jpg" class= "img-fluid pb-3">
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
