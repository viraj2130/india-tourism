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
    <a target="_blank" href="https://www.google.com/maps?um=1&ie=UTF-8&sa=X&ved=2ahUKEwiZhLS3mM74AhXukosKHejpCugQ_AUoAnoECAEQBA&q=Brihadisvara+Temple&lei=wfS5YuruOsKQrgSQyr2YCg">
     <img src="images/temples/brihadisvara.jpg" class= "img-fluid pb-3">
   </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
   <a target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsYpRIBaZ68RyVOD7W3IWyzDlQMoBg:1656352106421&stick=H4sIAAAAAAAAAONgVeLSz9U3MDEvKSo2MBIoSc0tyEktVsjMA6KUzMRTjEjSpxg5QRzzNIPsEijbxDArxxCqyMgsJ7nYCCqRXFZhXgFlm-YYGBXDxMsrssqgGrLMc4qyy6ASSSnZ6QVQtkVxspkhjG1hmJyN0GBaYA6VMEs3qsiBsYszDPJg7KoC83S4k7JyU4xh7i7OSyqEsi0ry9MqHzEeYeIWePnjnrDULqZJa05eY9zMxCXgk59fnJpTGZSak1iSmhKSL-THxeaaV5JZUinEI8XFxQHSblyUbSCloMTFeyLCjUe04biAvpYQ58Ttk7I_xCcbCC4Tdmpd6N9z3UiEi1c_Xd_QMNssOzkjxaJAYP6DaYxCUVzcwaklIfm--SmZaZVC3kKeXJy-qblJqUXF_mlC2lxczvk5OanJJZn5eUKyUtJckvrJcAH9DGC0lMZDo0mJOwji5cr4pHQrJg0mpUKjuF2Xpp1jixB0qmBg6FoT7CCloSXIxeaSn5uYmSd4z0PWIe35e3stYS6OkMSK_Lz83ErBG09b5rEve2uvpMg5Z6fsAv-it_aCpf4MB_pdnR0kOBQYNBgMH1myOqyfInhAi-EAI1PTvhWH2Dg4GAUYjJg4GKoYeBaxCjsVZWYkpmQWlyUWJSqEgF03gY0RAC_fc_BeAgAA&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj0j5nhn874AhVw_SoKHfuaBPMQ_AUoAnoECAIQBA&q=Padmanabhaswamy+Temple&lei=HvW5YqrtOrKurgT8kKK4Cw">
    <img src="images/temples/padmanab.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsYpRIBaZ68RyVOD7W3IWyzDlQMoBg:1656352106421&stick=H4sIAAAAAAAAAONgVeLSz9U3MDEvKSo2MBIoSc0tyEktVsjMA6KUzMRTjEjSpxg5QRzzNIPsEijbxDArxxCqyMgsJ7nYCCqRXFZhXgFlm-YYGBXDxMsrssqgGrLMc4qyy6ASSSnZ6QVQtkVxspkhjG1hmJyN0GBaYA6VMEs3qsiBsYszDPJg7KoC83S4k7JyU4xh7i7OSyqEsi0ry9MqHzEeYeIWePnjnrDULqZJa05eY9zMxCXgk59fnJpTGZSak1iSmhKSL-THxeaaV5JZUinEI8XFxQHSblyUbSCloMTFeyLCjUe04biAvpYQ58Ttk7I_xCcbCC4Tdmpd6N9z3UiEi1c_Xd_QMNssOzkjxaJAYP6DaYxCUVzcwaklIfm--SmZaZVC3kKeXJy-qblJqUXF_mlC2lxczvk5OanJJZn5eUKyUtJckvrJcAH9DGC0lMZDo0mJOwji5cr4pHQrJg0mpUKjuF2Xpp1jixB0qmBg6FoT7CCloSXIxeaSn5uYmSd4z0PWIe35e3stYS6OkMSK_Lz83ErBG09b5rEve2uvpMg5Z6fsAv-it_aCpf4MB_pdnR0kOBQYNBgMH1myOqyfInhAi-EAI1PTvhWH2Dg4GAUYjJg4GKoYeBaxCjsVZWYkpmQWlyUWJSqEgF03gY0RAC_fc_BeAgAA&um=1&ie=UTF-8&sa=X&ved=2ahUKEwj0j5nhn874AhVw_SoKHfuaBPMQ_AUoAnoECAIQBA&q=Somnath+temple&lei=hPW5Yvq8DoqprgTc_a7gCA">
    <img src="images/temples/somnath.webp" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsY9Ep9AfRdDwpoWO07F0IMpPQaLJQ:1656354250139&biw=1536&bih=688&dpr=1.25&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiz3qC2oM74AhWBxIsKHTlgBKIQ_AUoAnoECAEQBA&q=Jagannath+Temple,+Puri&lei=zvW5YtelAaaQrgSdtaaICw">
    <img src="images/temples/jagannath.jpg" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps/place/Kamakhya+Temple/@26.1664139,91.7029625,17z/data=!3m1!4b1!4m5!3m4!1s0x375a5b04b0f06ef1:0xaaad40304c7d3d1d!8m2!3d26.1664139!4d91.7051512">
    <img src="images/temples/Kamakhya.jfif" class= "img-fluid pb-3">
  </a>
</div>
<div class = "col-lg-4 col-md-4 col-12">
  <a  target="_blank" href="https://www.google.com/maps?sxsrf=ALiCzsY9Ep9AfRdDwpoWO07F0IMpPQaLJQ:1656354250139&biw=1536&bih=688&dpr=1.25&um=1&ie=UTF-8&sa=X&ved=2ahUKEwiz3qC2oM74AhWBxIsKHTlgBKIQ_AUoAnoECAEQBA&q=Lingaraja+Temple&lei=G_a5Yv2FHI2arwSOxLaYDg">
    <img src="images/temples/lingaraj.jpg" class= "img-fluid pb-3">
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
