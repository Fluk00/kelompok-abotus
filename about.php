<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE-=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/footer_style.css">
   <link rel="stylesheet" href="dist/tailwind.css">
   <link rel="stylesheet" href="css/about_style.css">

</head>
<body>

<!-- header section starts -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts -->
<section class="about">
   <svg
      class="icon-cart"
      width="84"
      height="64"
      viewBox="0 0 84 64"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
   >
      <!-- Your SVG path data here -->
   </svg>
   <img class="banner-1-min-1" src="images/home-img-1.png" />
   <div class="welcome-to-abotus-restaurant">Welcome to ABOTUS Restaurant</div>
   <div class="arrow-key">
      <svg
         class="icon-nav-arrow-right"
         width="30"
         height="64"
         viewBox="0 0 30 64"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
      >
         <!-- Your SVG path data here -->
      </svg>

      <svg
         class="icon-nav-arrow-right2"
         width="30"
         height="64"
         viewBox="0 0 30 64"
         fill="none"
         xmlns="http://www.w3.org/2000/svg"
      >
         <!-- Your SVG path data here -->
      </svg>
   </div>
   <div
      class="abotus-is-a-restaurant-with-affordable-prices-that-can-be-enjoyed-by-all-groups-especially-tangerang-residents-abotus-has-a-wide-variety-of-ishes-so-customers-can-try-new-food-from-all-over-the-world-abotus-always-strives-to-provide-more-than-sufficient-satisfaction-to-each-customer-starting-from-satisfaction-with-service-from-the-time-the-customer-arrives-until-the-customer-leaves-the-restaurant-to-satisfaction-with-other-interaction-situations"
   >
      ABOTUS is a restaurant with affordable prices that can be enjoyed by all
      groups, especially Tangerang residents. ABOTUS has a wide variety of dishes
      so customers can try new food from all over the world. ABOTUS always strives
      to provide more than sufficient satisfaction to each customer, starting from
      satisfaction with service from the time the customer arrives until the
      customer leaves the restaurant, to satisfaction with other interaction
      situations.
   </div>
   <div class="group-3">
      <div class="abotus2">ABOTUS</div>
      <img class="logo-12" src="logo-12.png" />
   </div>
   <div class="rectangle-18"></div>
   <div class="side-border"></div>
 
</section>

<!-- footer section starts -->
<?php include 'components/footer.php'; ?>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>
<!-- custom js file link -->
<script src="js/script.js"></script>

<script>
var swiper = new Swiper(".reviews-slider", {
   loop: true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable: true,
   },
   breakpoints: {
      0: {
         slidesPerView: 1,
      },
      700: {
         slidesPerView: 2,
      },
      1024: {
         slidesPerView: 3,
      },
   },
});
</script>

</body>
</html>
