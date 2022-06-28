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



  <!-- Page Wrapper -->
  <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/imgPunjab.jpg" alt="PUNJAB" width="1100" height="500" style="margin-left: 21%;">
      <div class="carousel-caption">
        <h3>PUNJAB</h3>
        <p>We had great time in INDIA</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img2.jpg" alt="AGRA" width="1100" height="500" style="margin-left: 21%;">
      <div class="carousel-caption">
        <h3>Taj Mhal</h3>
        <p>Thank you, India!</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="images/img3.jpg" alt="SHIVA" width="1100" height="500" style="margin-left: 21%;">
      <div class="carousel-caption">
        <h3>Lord Shiva</h3>
        <p>We love INDIA</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> About us </h2>
</div>
<div class = "container-fluid">
<div class ="row">
  <div class = "col-lg-6 col-md-6 col-12">
  <img src="images/img19.jpg" class= "img-fluid aboutimg">
</div>
<div class = "col-lg-6 col-md-6 col-12">
  <h2 class="display-4"> We provide the purest information</h2>
  <p class= "py-5"> If you want to travel to one of the most beautiful places on earth, so you are on the right place. we are happy to help you with your safe and amazing journey to INDIA.</p>

  </p>
  <a href="<?php echo BASE_URL . '/information-page.php' ?>" class="btn btn-success"> Get more information </a>
</div>
  </div>
</div>
</section>

<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> Our Services </h2>
</div>
  <div class = "container-fluid">
<div class ="row">
  <div class = "col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/img5.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Beautiful Nature</h4>
    <p class="card-text">Visit to mesmerising places</p>
    <a href="beautiful-nature.php" class="btn btn-primary">More information</a>
  </div>
</div>
</div>

<div class = "col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/img7.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Historical Places</h4>
    <p class="card-text">Trip to dark tourism</p>
    <a href="historical-places.php" class="btn btn-primary">More information</a>
  </div>
</div>
</div>
<div class = "col-lg-4 col-md-4 col-12">
    <div class="card" >
  <img class="card-img-top" src="images/img8.jpg" alt="Card image">
  <div class="card-body">
    <h4 class="card-title">Temples of India</h4>
    <p class="card-text">See cultural heritage</p>
    <a href="temples-of-india.php" class="btn btn-primary">More information</a>
  </div>
</div>
</div>

</div>
</div>
</section>

<section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> Gallery </h2>
</div>
<div class = "container-fluid">
<div class ="row">
  <div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img17.jpg" class= "img-fluid pb-3">
</div>
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img9.jpg" class= "img-fluid pb-3">
</div>
<!-- <div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img10.jpg" class= "img-fluid pb-3">
</div>
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img11.jpg" class= "img-fluid pb-3">
</div> -->
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img12.jpg" class= "img-fluid pb-3">
</div>
<!-- <div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img13.jpg" class= "img-fluid pb-3">
</div> -->
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img14.jpg" class= "img-fluid pb-3">
</div>
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img15.jpg" class= "img-fluid pb-3">
</div>
<div class = "col-lg-4 col-md-4 col-12">
    <img src="images/img16.jpg" class= "img-fluid pb-3">
</div>
</div>
</div>
</section>

<!-- <section class = "my-5">
<div class = "py-5">
  <h2 class = "text-center"> Contact us </h2>
</div>
<div class="w-50 m-auto">
  <form action="userinfo.php" method="post">
    <div class="form-group">
      <label>user</label>
      <input type="text" name="user"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>email</label>
      <input type="text" name="email"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>mobile</label>
      <input type="text" name="mobile"  autocomplete = "off" class = "form-control">
       </div>

       <div class="form-group">
      <label>comment</label>
      <textarea class ="form-control" name="comment"></textarea>
       </div>
       <button type="submit" class="btn btn-success">Submit</button>
 <button class="btn btn-success"><a style = "color: white;" href="get_info.php">See Data</a></button>
    </form>
</div>
</section> -->
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
