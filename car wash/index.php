<?php
if (isset($_POST['submit'])) {
$name = trim($_POST['name']);
$email = trim($_POST['email']);
$message = trim($_POST['message']);

$myMail = "hello@wecode.co.za";
$header = "FROM: " . $email;
$message2 = "You have received a message from " . $name . ". \n\n" . $message;

mail($myMail, $message2, $header);
header("location: contact.php?mailsend");

}
define('TITLE', 'Cool Classic');
?>

<!DOCTYPE html>
<html lang="zxx">
<head>
<title><?php echo TITLE; ?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="UTF-8" />
<meta name="keywords" content="Car Services Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
/>
<script>
addEventListener("load", function () {
setTimeout(hideURLbar, 0);
}, false);

function hideURLbar() {
window.scrollTo(0, 1);
}
</script>
<link rel="stylesheet" href="css/bootstrap.css">
<link href="css/JiSlider.css" rel="stylesheet">
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<link rel="stylesheet" href="css/fontawesome-all.css">
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>
<body>
<div class="main">
<!--  header start -->
<header>
<div class="container-fluid">
<div class="row header-w3ls-top pt-lg-5 pt-md-4 pt-3 px-lg-5 px-3">
<div class="col-xl-10 col-md-9 col-sm-8 col-6 logo">
<h1>
<a href="index.html">
<img src="images/logo.png" style="width: auto;height: 80px;">
</a>
</h1>
</div>
<div class="col-xl-2 col-md-3 col-sm-4 col-6 menu-agile text-center">
<a href="#menu" id="toggle">
<span></span>
</a>
<div id="menu" class="menustyles">
<ul class="list-unstyled">
<li>
<a href="index.html">Home</a>
</li>
<li>
<a href="#about" class="scroll">About</a>
</li>
<li>
<a href="#services" class="scroll">Services</a>
</li>
<li>
<a href="#contact" class="scroll">Contact Us</a>
</li>
</ul>
</div>
</div>
</div>
</div>
</header>
<!-- //header end -->
<!-- banner start -->
<div class="banner-silder">
<div id="JiSlider" class="jislider">
<ul>
<li>
<div class="banner-top banner-top1">
<div class="container">
<div class="banner-info">
<h3 class="name text-white text-uppercase text-center">
<span class="name-part w3l-text1">Cleaning up</span>
<span class="name-part w3l-text2">the </span>
<span class="name-part w3l-text3">city, one car at
<label>a</label> time</span>
</h3>
</div>
</div>
</div>
</li>
<li>
<div class="banner-top banner-top2">
<div class="container">
<div class="banner-info">
<h3 class="name text-white text-uppercase text-center">
<span class="name-part w3l-text1">Plant a </span>
<span class="name-part w3l-text2">clean</span>
<span class="name-part w3l-text3">car in 
<label>your</label> garage tonight</span>
</h3>
</div>
</div>
</div>
</li>
<li>
<div class="banner-top banner-top3">
<div class="container">
<div class="banner-info">
<h3 class="name text-white text-uppercase text-center">
<span class="name-part w3l-text1">Your</span>
<span class="name-part w3l-text2">Vehicle</span>
<span class="name-part w3l-text3">treated
<label>like</label> gold</span>
</h3>
</div>
</div>
</div>
</li>
<li>
<div class="banner-top banner-top4">
<div class="container">
<div class="banner-info">
<h3 class="name text-white text-uppercase text-center">
<span class="name-part w3l-text1">Keep</span>
<span class="name-part w3l-text2">your</span>
<span class="name-part w3l-text3">vehicle
<label>looking</label> its best</span>
</h3>
</div>
</div>
</div>
</li>
</ul>
</div>
</div>
<!-- //banner ends-->
</div>

<!-- about starts -->
<div class="about py-5" id="about">
<div class="container py-xl-5 py-lg-3">
<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">about us
<span></span>
</h3>
<div class="row mb-5">
<div class="col-lg-6 aboutright ml-2 mr-sm-0 mr-3">
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
<ol class="carousel-indicators">
<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
</ol>
<div class="carousel-inner">
<div class="carousel-item active">
<img class="img-fluid" src="images/g1.jpg" alt="First slide">
</div>
<div class="carousel-item">
<img class="img-fluid" src="images/g4.jpg" alt="Second slide">
</div>
</div>
<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
<span class="carousel-control-prev-icon" aria-hidden="true"></span>
<span class="sr-only">Previous</span>
</a>
<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
<span class="carousel-control-next-icon" aria-hidden="true"></span>
<span class="sr-only">Next</span>
</a>
</div>
</div>
<div class="col-lg-5 aboutleft ml-xl-4">
<h4 class="about-left-agile text-dark text-capitalize mb-2">about our
<span>CAR WASH</span>
</h4>
<p class="border-left pl-3">Welcome to Cool Classic, your number one source for all things cars. We're dedicated to providing you the very best of car services, with an emphasis on panel beating and car wash.
</p>
<h4 class="about-left-agile text-dark text-capitalize mt-4 mb-2">Bring back your
<span>CAR</span> gleaming like
<span>NEW</span>!
</h4>
<p>Founded in 2020, Cool Classic has come a long way from its beginnings in Tembisa. When Cool Classic first started out, Our passion for cars drove us to start our own business.</p>
</div>
</div>
</div>
</div>
<!--//about ends-->

<!-- about bottom starts -->
<div class="about-bottom-wthree py-5">
<div class="container py-xl-5 py-lg-3">
<div class="row py-4 posi-w3ls-bottom">
<div class="col-lg-4 bottom-w3ls1">
<h4 class="text-white mb-4">Trained Professionals</h4>
<p></p>
<i class="fas fa-users text-white"></i>
</div>
<div class="col-lg-4 bottom-w3ls1 my-lg-0 my-5">
<h4 class="text-white mb-4">Perfect Quality</h4>
<p></p>
<i class="fas fa-tachometer-alt text-white"></i>
</div>
<div class="col-lg-4 bottom-w3ls1">
<h4 class="text-white mb-4">Best Products Used</h4>
<p></p>
<i class="fas fa-american-sign-language-interpreting text-white"></i>
</div>
</div>
</div>
</div>
<!-- //about bottom  ends-->


<!-- services starts -->
<div class="services py-5" id="services">
<div class="container py-xl-5 py-lg-3">
<h3 class="title text-capitalize text-dark text-center pb-3 mb-sm-5 mb-4">Our Services
<span></span>
</h3>
<div class="row">
<div class="col-md-7">
<div class="img1 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-4">
<h4>Hand Wash</h4>
</div>
</div>
</div>
<div class="col-md-5 px-md-0 my-md-0 mt-3">
<div class="img1 img2 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-3">
<h4>Car Glassing</h4>
</div>
</div>
</div>
</div>
<div class="row my-3">
<div class="col-md-7">
<div class="img1 img3 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-4">
<h4>Complete Detail Services</h4>
</div>
</div>
</div>
<div class="col-md-5 px-md-0 my-md-0 mt-3">
<div class="img1 img4 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-3">
<h4>Perfect Quality</h4>
</div>
</div>
</div>
</div>
<div class="row">
<div class="col-md-5 my-md-0 mb-3">
<div class="img1 img5 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-3">
<h4>Car Inspection</h4>
</div>
</div>
</div>
<div class="col-md-7 px-md-0">
<div class="img1 img6 img-grid  d-flex align-items-end justify-content-center p-3">
<div class="img_text_w3ls px-4">
<h4>Full Service Car Wash</h4>
</div>
</div>
</div>
</div>
</div>
</div>
<!-- //services ends-->


<!-- iframe video starts -->
<div class="video-w3ls bg-dark py-5">
<div class="container py-xl-5 py-lg-3">
<div class="row">
<div class="col-lg-6 w3ls-agile-video">
<iframe src="images/v1.mp4"></iframe>
</div>
<div class="col-lg-6 w3ls-agile-video-right mt-lg-0 mt-4">
<h4 class="about-left-agile text-white text-capitalize mb-2">The Main Goal Of
<span>COOL CLASSIC</span>
</h4>
<p>To be viewed as a premium car wash and detail service in Tembisa. Maintain a very high gross profit margin.
Maintain a modest, steadily growing net profit margin. Expand to two locations after third year of operation.</p>

<p>To provide top-quality washing and detail service for luxury car owners in Tembisa. Cool Classic will work to keep employees satisfied in order to maintain impeccable customer service.</p>
</div>
</div>
</div>
</div>
<!-- //iframe video ends -->

<br><br><br>
<!-- contact starts-->
<div class="contact py-5" id="contact">
<div class="container py-xl-5 py-lg-3">
<h3 class="title text-capitalize text-white text-center pb-3 mb-sm-5 mb-4">contact us
<span></span>
</h3>
<div class="d-flex">
<div class="col-lg-6 contact-right">
<div class="w3l-agile">
<form action="." method="post">
<div class="form-group">
<input type="text" name="name" placeholder="Your name" class="form-control" required="">
</div>
<div class="form-group">
<input type="email" name="email" placeholder="Your email" class="form-control" required="">
</div>
<div class="form-group">
<input type="text" name="subject" placeholder="Your subject" class="form-control" required="">
</div>
<div class="form-group">
<textarea name="message" placeholder="Your message" class="form-control" required=""></textarea>
</div>
<input type="submit" value="Send">
</form>
</div>
</div>
<div class="col-lg-6 contact-left mt-lg-0 mt-5">
<div class="w3l-agile ">
<div class="phone my-4">
<h4 class="text-white">
<i class="fa fa-phone" aria-hidden="true"></i>Phone</h4>
<p>+27 73 901 3984.</p>
</div>
<div class="email">
<h4 class="text-white">
<i class="fa fa-envelope"></i>E-mail</h4>
<p>
<a href="mailto:info@example.com">info@coolclassic.co.za</a>
</p>
</div>
<!-- map starts-->
<div class="map-w3ls mt-4">
<iframe src="https://maps.google.com/maps?q=tembisa&t=&z=13&ie=UTF8&iwloc=&output=embed"
allowfullscreen></iframe>
</div>
<!-- //map ends-->
</div>
</div>
</div>
</div>
</div>
<!-- //contact ends -->
<!-- footer starts-->
<div class="footer-bot py-5 text-center">
<div class="container">
<div class="logo2">
<h2>
<a href="index.html">
<span>C</span>ool
<span>C</span>lassic
</a>
</h2>
</div>
<!-- social icons starts -->
<div class="agileinfo_social_icons my-4">
<ul class="agileits_social_list list-unstyled">
<li>
<a href="#" class="w3_agile_facebook">
<i class="fa fa-facebook-f"></i>
</a>
</li>
<li class="mx-2">
<a href="#" class="agile_twitter">
<i class="fa fa-twitter"></i>
</a>
</li>
<li>
<li class="ml-2">
<a href="#" class="w3_agile_google">
<i class="fa fa-google-plus-g"></i>
</a>
</li>
</ul>
</div>
<!-- social icons ends -->
<!-- copyright starts-->
<?php include "footer.php" ?>

<!-- //copyright ends -->
</div>
</div>
<!-- //footer ends-->

<script src="js/jquery-2.2.3.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/JiSlider.js"></script>
<script>
$(window).load(function () {
$('#JiSlider').JiSlider({
color: '#fff',
start: 3,
reverse: true
}).addClass('ff')
})
</script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script src="js/car_services.js"></script>
<script src="js/text.js"></script>
<script src="js/menu.js"></script>
<script src="js/smoothbox.jquery2.js"></script>
<link href="css/owl.carousel.css" rel="stylesheet">
<script src="js/owl.carousel.js"></script>
<script>
$(document).ready(function () {
$("#owl-demo").owlCarousel({
items: 1,
lazyLoad: true,
autoPlay: false,
navigation: true,
navigationText: true,
pagination: true,
});
});
</script>
</body>
</html>