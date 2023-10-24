

<?php
include 'components/connect.php';

session_start();

$user_id = isset($_SESSION['user_id']) ? $_SESSION['user_id'] : '';

if (isset($_POST['send'])) {
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL); // Use FILTER_SANITIZE_EMAIL for email
    $number = filter_var($_POST['number'], FILTER_SANITIZE_STRING);
    $msg = filter_var($_POST['msg'], FILTER_SANITIZE_STRING);

    // You should use a prepared statement to prevent SQL injection
    $select_message = $conn->prepare("SELECT * FROM `messages` WHERE name = ? AND email = ? AND number = ? AND message = ?");
    $select_message->execute([$name, $email, $number, $msg]);

    if ($select_message->rowCount() > 0) {
        $message[] = 'Already sent message!';
    } else {
        // Use placeholders in your SQL queries to prevent SQL injection
        $insert_message = $conn->prepare("INSERT INTO `messages` (user_id, name, email, number, message) VALUES (?, ?, ?, ?, ?)");
        $insert_message->execute([$user_id, $name, $email, $number, $msg]);

        $message[] = 'Sent message successfully!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE,edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/aboutstyle.css">
    <link rel="stylesheet" href="dist/tailwind.css">
</head>
  
<body>
    <?php include 'components/user_header.php'; ?>

  
    <section class="abotus text-gray-400 bg-white body-font">
  <div class="abotus container mx-auto flex px-5 py-24 items-center justify-center flex-col">
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="images/banner4-min.jpg">
    <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-6xl text-8xl mb-4 font-medium text-white font-montserrat">Welcome to ABOTUS Restaurant</h1>
      <p class="text-white text-2xl leading-relaxed mb-8 font-montserrat">ABOTUS is a restaurant with affordable prices that can be enjoyed by all
    groups, especially Tangerang residents. ABOTUS has a wide variety of ishes
    so customers can try new food from all over the world. ABOTUS always strives
    to provide more than sufficient satisfaction to each customer, starting from
    satisfaction with service from the time the customer arrives until the
    customer leaves the restaurant, to satisfaction with other interaction
    situations.</p>
      <div class="flex justify-center">
        <a href="home.php">
        <button class="inline-flex text-white bg-indigo-500 border-0 py-4 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">HOME</button>
        </a>
       <a href="menu.php">
       <button class="ml-4 inline-flex text-gray-400 bg-gray-800 border-0 py-4 px-8 focus:outline-none hover:bg-gray-700 hover:text-white rounded text-lg">MENU</button>
       </a>
      </div>
    </div>
  </div>
</section>
    

  <!-- <img class="banner-1-min-1" src="banner-1-min-1.png" />
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
      <path
        d="M0 0L30 32L0 64"
        stroke="white"
        stroke-width="10"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>

    <svg
      class="icon-nav-arrow-right2"
      width="30"
      height="64"
      viewBox="0 0 30 64"
      fill="none"
      xmlns="http://www.w3.org/2000/svg"
    >
      <path
        d="M30 64L3.8466e-06 32L30 -1.90735e-06"
        stroke="white"
        stroke-width="10"
        stroke-linecap="round"
        stroke-linejoin="round"
      />
    </svg>
  </div>
  <div
    class="abotus-is-a-restaurant-with-affordable-prices-that-can-be-enjoyed-by-all-groups-especially-tangerang-residents-abotus-has-a-wide-variety-of-ishes-so-customers-can-try-new-food-from-all-over-the-world-abotus-always-strives-to-provide-more-than-sufficient-satisfaction-to-each-customer-starting-from-satisfaction-with-service-from-the-time-the-customer-arrives-until-the-customer-leaves-the-restaurant-to-satisfaction-with-other-interaction-situations"
  >
    ABOTUS is a restaurant with affordable prices that can be enjoyed by all
    groups, especially Tangerang residents. ABOTUS has a wide variety of ishes
    so customers can try new food from all over the world. ABOTUS always strives
    to provide more than sufficient satisfaction to each customer, starting from
    satisfaction with service from the time the customer arrives until the
    customer leaves the restaurant, to satisfaction with other interaction
    situations.
  </div> -->
 
    <?php include 'components/footer.php'; ?>

    <script src="js/script.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
</body>

</html>
