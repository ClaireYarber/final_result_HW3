// <?php
// $pageTitle = "Home";
// include "view-header.php";
// ?>
// <h1>Homework 3</h1>
// <?php
// include "view-footer.php";
// ?>
<?php
$pageTitle = "Home";
include "view-header.php";
?>

<h1>Homework 3</h1>

<!-- Carousel Section -->
<div class="carousel-container">
  <div class="carousel">
    <div><img src="image1.jpg" alt="F1 Driver 1"></div>
    <div><img src="image2.jpg" alt="F1 Driver 2"></div>
    <div><img src="image3.jpg" alt="F1 Driver 3"></div>
    <div><img src="image4.jpg" alt="F1 Driver 4"></div>
  </div>
</div>

<?php
include "view-footer.php";
?>

<!-- Include Slick Carousel CSS -->
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>

<!-- Include jQuery and Slick Carousel JS -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<!-- Slick Carousel Initialization -->
<script type="text/javascript">
  $(document).ready(function(){
    $('.carousel').slick({
      dots: true,  // Add navigation dots
      infinite: true,  // Infinite scrolling
      speed: 500,  // Transition speed
      fade: true,  // Fade effect between slides
      cssEase: 'linear'  // Smooth transition effect
    });
  });
</script>


