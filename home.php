<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/add_cart.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet"  href="css/footer_style.css">
   <link rel="stylesheet"  href="css/sec4.css">
   <link rel="stylesheet"  href="dist/tailwind.css">
   <title>home</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


</head>
<body>

<?php include 'components/user_header.php'; ?>

<section class="home-menu">
   <div class="desktop-1">
      <img class="banner-1" src="images/banner_1.png" />
      <div class="rectangle-1"></div>
      <div class="banner-12">
      <div class="swiper hero-slider">
      <div class="swiper-wrapper">
         <div class="rectangle-2"></div>
         <div class="swiper-slide slide">
            <div class="content">
               <div
                  class="creamy-mushroom"
               >
                  <span
                  ><span
                     class="creamy-mushroom-span"
                     >Creamy Mushroom Soup<br /></span
                  ><span
                     class="creamy-mushroom-span2"
                     ><br /></span
                  ><span
                     class="creamy-mushroom-span3"
                     >Relaxing hot creamy soup with <br />chicken, mushroom, &amp;
                     croutons<br />- feels like mother’s touch</span
                  ></span
                  >
               </div>
            </div>
            <div class="image">
               <img class="mushroom-soup-1" src="images/mushroom_soup.png" />
            </div>
         </div>
         <div class="swiper-slide slide">
            <div class="content">
               <div
                     class="dori-fish"
                  >
                     <span
                     ><span
                        class="dori-fish-span"
                        >Dori Fish n Chips<br /></span
                     ><span
                        class="dori-fish-span2"
                        ><br /></span
                     ><span
                        class="dori-fish-span3"
                        >Cripsy outside, mild inside <br>
                        - 120 gram of deep fried battered <br>
                        dory fillet served with caper mayo</span
                     ></span
                     >
               </div>
            </div>
            <div class="image">
               <img class="dori-fish-1" src="images/fishnchips.png" />
            </div>
         </div>

         <div class="swiper-slide slide">
         <div class="content">
               <div
                     class="berry-cheese"
                  >
                     <span
                     ><span
                        class="berry-cheese-span"
                        >Berry Cheese<br /></span
                     ><span
                        class="berry-cheese-span2"
                        ><br /></span
                     ><span
                        class="berry-cheese-span3"
                        >Seasonal berries, topped with <br> 
                        berries sauce, cheese sauce and <br>
                        ice cream</span
                     ></span
                     >
               </div>
            </div>
            <div class="image">
               <img class="berry-cheese-1" src="images/crepe.png" />
            </div>
         </div>
         <div class="button-see-menu">
            <div class="see-menu"><a href="menu.php">See Menu</a></div>
         </div>
      </div>
      </div>

      <div class="swiper-pagination"></div>

      </div>   
   </div>
</section>

<section class="menu-popular">
    <div class="desktop-2 lg:flex lg:justify-center h-screen">
        <div class="custom-background bg-amber-300">
            <div class="img-background object-cover h-screen lg:pt-52 bg-amber-300 text-center lg:text-left">
                <h1 class="text-8xl py-8 lg:py-30 lg:text-8xl font-bold font-montserrat text-neutral-700 text-center">POPULAR MENU</h1>
                <p class="text-4xl text-center lg:text-6xl lg:mx-72 font-light font-montserrat text-black">
                    Celebrate your taste buds with our popular menu, brimming with savory delights and culinary treasures that have captivated the palates of countless visitors.
                </p>
                <div class="flex flex-col mt-6 lg:mt-20 lg:flex-row justify-evenly lg:justify-evenly items-center">
                    <div class="mb-4 lg:mb-4 text-center">
                        <img class="h-auto mx-auto max-w-xs lg:pb-20 lg:max-w-lg marker:rounded-lg shadow" src="images/grilled baby potato.png" alt="Grilled Baby Potato">
                        <h2 class="text-6xl lg:text-6xl font-bold font-montserrat text-neutral-700 text-center py-8">Grilled Baby Potato</h2>
                        <p class="text-4xl max-w-[510px] text-center lg:text-4xl lg:max-w-[320px] font-normal font-montserrat text-neutral-700">
                        All-time favorite of baby potato grilled with garlic flavor, rosemary, and olive oil, served with tartar sauce and sliced smoked beef.
                     </p>

                    </div>
                    <div class="mb-4 lg:mb-4 text-center">
                        <img class="h-auto mx-auto max-w-xs lg:pb-20 lg:max-w-lg rounded-lg shadow" src="images/green tropical drink.png" alt="Tropical Pale">
                        <h2 class="text-6xl lg:text-6xl font-bold font-montserrat text-neutral-700 text-center py-8">Tropical Pale</h2>
                        <p class="text-4xl text-center lg:text-4xl lg:max-w-[320px]  font-normal font-montserrat text-neutral-700">
                            The finest pineapples made into the most popular tropical beverage.
                        </p>
                    </div>
                    <div class="mb-4 lg:mb-4 text-center">
                        <img class="h-auto mx-auto max-w-xs lg:pb-20 lg:max-w-lg rounded-lg shadow" src="images/green pesto.png" alt="Green Pesto">
                        <h2 class="text-6xl lg:text-6xl font-bold font-montserrat text-neutral-700 text-center py-8">Green Pesto</h2>
                        <p class="text-4xl text-center lg:text-4xl lg:max-w-[320px] font-normal font-montserrat text-neutral-700">
                            Go green with our homemade pesto sauce with garlic & olive oil.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="category">
   <div class="desktop-3">
      <img class="lorenzo-rui-0-gmylg-ha-ks-e-unsplash-1" src="images/bgcat.jpg">
      <div class="categories">CATEGORIES</div>
      <div class="rectangle-10">
         <a href="category.php?category=main">
         <img src="images/main_dish.png" alt="" class="burger">
         <h3 class="main-dish">Main Dish</h3></a>
      </div>
      <div class="rectangle-11">
         <a href="category.php?category=snacks">
         <img src="images/snacks.png" alt="" class="burger">
         <h3 class="snacks">Snacks</h3></a>
      </div>
      <div class="rectangle-12">
         <a href="category.php?category=appetizer" >
         <img src="images/appetizer.png" alt="" class="burger">
         <h3 class="appetizer">Appetizer</h3></a>
      </div>
      <div class="rectangle-13">
         <a href="category.php?category=drinks" >
         <img src="images/cocktail.png" alt="" class="burger">
         <h3 class="drinks">Drinks</h3></a>
      </div>
      <div class="rectangle-14">
         <a href="category.php?category=desserts" >
         <img src="images/dessert.png" alt="" class="burger">
         <h3 class="dessert">Dessert</h3></a>
      </div>
   </div>
</section>


<section class="products">
<div class="desktop-4">
  <img class="tomat-kebalik-1" src="images/tomat_kebalik.png" />
  <div class="our-statistics">OUR STATISTICS</div>
  <div
    class="the-popular-restaurant-consistently-garners-rave-reviews-and-high-customer-ratings-boasting-a-remarkable-95-satisfaction-rate-among-diners-making-it-a-top-choice-for-culinary-enthusiasts"
  >
    The popular restaurant consistently garners rave reviews and high customer
    ratings, boasting a remarkable 95% satisfaction rate among diners, making it
    a top choice for culinary enthusiasts.
  </div>
  <div class="rectangle-4"></div>
  <div class="rectangle-6"></div>
  <div class="rectangle-5"></div>
  <div class="_95">95%</div>
  <div class="satisfication-rate">SATISFICATION<br />RATE</div>
  <div class="_3-5-k">3.5k+</div>
  <div class="customer">CUSTOMER</div>
  <div class="_500">500</div>
  <div class="store">STORE</div>
</div>


</section>

<?php include 'components/footer.php'; ?>

<script src="https://cdn.tailwindcss.com"></script>

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".hero-slider", {
   loop:true,
   grabCursor: true,
   effect: "flip",
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
});

</script>

</body>
</html>