<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

if(isset($_POST['submit'])){

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);
   $pass = sha1($_POST['pass']);
   $pass = filter_var($pass, FILTER_SANITIZE_STRING);

   $select_user = $conn->prepare("SELECT * FROM `users` WHERE email = ? AND password = ?");
   $select_user->execute([$email, $pass]);
   $row = $select_user->fetch(PDO::FETCH_ASSOC);

   if($select_user->rowCount() > 0){
      $_SESSION['user_id'] = $row['id'];
      header('location:home.php');
   }else{
      $message[] = 'incorrect username or password!';
   }

}

function generateCaptchaCode($length = 6) {
   return substr(str_shuffle("0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>login</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<section class="form-container">

   <section class="form-container">
    <form action="" method="post">
        <h3>login now</h3>
        <input type="email" name="email" required placeholder="enter your email" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')">
        <input type="password" name="pass" required placeholder="enter your password" class="box" maxlength="50" oninput="this.value = this.value.replace(/\s/g, '')"> 

        <label for="captcha">Enter the CAPTCHA code: </label>
         <input type="text" name="captcha" id="captcha" required>
         <span id="captchaCode" class="box"><?php echo generateCaptchaCode(); ?></span>
         <input type="submit" id="loginButton" value="login now" name="submit" class="btn" style="display: none;">   

        <button type="button" id="submitCaptcha" class="btn">Submit CAPTCHA</button>
        <input type="submit" id="loginButton" value="login now" name="submit" class="btn" style="display: none;"> 
        <script>
            document.addEventListener('DOMContentLoaded', function () {
               document.querySelector('#submitCaptcha').addEventListener('click', function () {
                     var enteredCaptcha = document.querySelector('#captcha').value;
                     var captchaCode = document.querySelector('#captchaCode').textContent;
                     if (enteredCaptcha === captchaCode) {
                        // CAPTCHA code is correct
                        
                     }                 

                     if (enteredCaptcha === captchaCode) {
                        document.querySelector('#loginButton').style.display = 'block';
                        document.querySelector('#submitCaptcha').style.display = 'none';
                     } else {
                        alert('CAPTCHA code is incorrect. Please try again.');
                     }
               });
            });
         </script>
         <?php 
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $enteredCaptcha = isset($_POST['captcha']) ? $_POST['captcha'] : '';
         
            // Verify the entered CAPTCHA code
            $captchaCode = isset($_SESSION['captcha_code']) ? $_SESSION['captcha_code'] : '';
         } else {
            // If it's not a POST request (e.g., when the page is initially loaded), generate a new CAPTCHA code and store it in the session
            $captchaCode = generateCaptchaCode();
            $_SESSION['captcha_code'] = $captchaCode;
         }
         
         ?>
        <p>don't have an account? <a href="register.php">register now</a></p>
    </form>
</section>

   </form>

</section>


<?php include 'components/footer.php'; ?>



<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>