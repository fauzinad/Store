<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<?php include 'header.php'; ?>

<section class="about">

   <div class="row">

      <div class="box">
         <img src="images/about-img-1.png" alt="">
         <h3>Why choose us?</h3>
         <p>In this era of globalization, many people rely on technology. So, we decided to make this online store to help people to buy their groceries with only a few taps on their screen. We also want to dare you guys to eat much healthier food than eating fast or junk food</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

      <div class="box">
         <img src="images/about-img-2.png" alt="">
         <h3>What we provide?</h3>
         <p>We provide a platform to buy groceries much more easier by a few taps on your screen. We also have a bunch of choices for your goods shipment so you don't have to take it yourself</p>
         <br>
         <a href="shop.php" class="btn">our shop</a>
      </div>

   </div>
<br><br>

<?php include 'footer.php'; ?>

<script src="js/script.js"></script>

</body>
</html>