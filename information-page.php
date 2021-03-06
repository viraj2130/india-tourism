<!DOCTYPE html>
<html lang="en">
<head>
    <title>How To Create Newsletter Subscription Form Design In Bootstrap 4</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<style>
/* Newsletter Section */
#newsletter {
    background: #4CAF50;
    padding: 80px 0px;
    text-align: center;
    color: #fff;
}
#newsletter h3 {
    font-size: 36px;
    font-weight: 400;
    color: #fff;
}
#newsletter p {
    font-size: 15px;
    font-style: italic;
    padding: 0px;
    margin: 25px 0px 40px;
}
#newsletter form {
    background: #fff;
    padding: 6px 10px;
    position: relative;
    border-radius: 50px;
    box-shadow: 0px 2px 15px rgba(0, 0, 0, 0.1);
    text-align: left;
}
#newsletter form input[type="email"] {
    border: 0;
    padding: 4px 8px;
    width: calc(100% - 100px);
}
#newsletter form input[type="submit"] {
    position: absolute;
    top: 0;
    right: -1px;
    bottom: 0;
    border: 0;
    background: none;
    font-size: 16px;
    padding: 0 20px;
    background: #FF9800;
    color: #fff;
    border: 2px solid #fff;
    border-radius: 50px;
    box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
}
#newsletter form input[type="submit"]:hover {
    opacity: 0.9;
}
#newsletter .social-links {
    margin-top: 30px;
}
#newsletter .social-links a {
    font-size: 18px;
    display: inline-block;
    background: #ffffff;
    color: #4caf50;
    line-height: 1;
    padding: 10px 0;
    margin-right: 4px;
    border-radius: 10px 10px 10px 0px;
    text-align: center;
    width: 38px;
    height: 38px;
    transition: 0.4s;
}
#newsletter .social-links a:hover {
    background: #FF9800;
    color: #fff;
    text-decoration: none;
}
</style>
</head>
<body>

    <!--  Newsletter Section -->
    <section id="newsletter">
      <p><a href="index.php">Home</a></p>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <h3 style="margin-top: 62%;">Get in Touch</h3>
                    <p>Get the more detailed information by adding your email here</p>
                </div>
            </div>
          <div class="row justify-content-center">
                <div class="col-lg-6" style="margin-bottom: 66%;">
                    <form action="" method="">
                        <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
                    </form>
                </div>
          </div>
            <!-- <div class="social-links">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
                <a href="#"><i class="fab fa-pinterest-p"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
            </div> -->
        </div>
    </section><!-- End newsletter Section-->

</body>
</html>
