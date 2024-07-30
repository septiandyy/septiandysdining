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
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->
<?php include 'components/user_header.php'; ?>
<!-- header section ends -->

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>WHY CHOOSE US?</h3>
         <p>
         <p>
         <p>
         <p>Welcome to Septiandy's Dining! Where culinary artistry meets exceptional dining experiences. Our restaurant is dedicated to providing a unique blend of flavors, atmosphere, and hospitality that will leave a lasting impression.</p>
         <p>
         <p>
         <p>At Septiandy's Dining, we believe that dining is not just about food; it's about the experience. Our philosophy is to combine the freshest ingredients, innovative recipes, and a warm, inviting atmosphere to create a destination where guests can enjoy the art of dining.</p>
         <a href="menu.php" class="btn">our menu</a>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- steps section starts  -->

<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>choose order</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>fast delivery</h3>
         <p></p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>enjoy food</h3>
         <p></p>
      </div>

   </div>

</section>

<!-- steps section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="title">customer's reviews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/blue.jpg" alt="">
            <p>Septiandy's Dining is a hidden gem! The fusion of flavors in their dishes is simply outstanding. The service is impeccable, and the ambiance is perfect for a cozy dinner. Highly recommended!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Blue Marvel</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/loki.jpg" alt="">
            <p>Absolutely loved dining at Septiandy's Dining. The menu offers a delightful mix of traditional and modern cuisine, all prepared to perfection. The staff is friendly, and the overall experience is unforgettable.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Loki Laufeyson</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/daredevil.jpg" alt="">
            <p>Septiandy's Dining has quickly become my go-to spot for delicious and unique meals. The attention to detail in every dish is impressive, and the atmosphere is warm and inviting. A must-visit for any food lover!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Daredevil</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/panther.jpg" alt="">
            <p>Dining at Septiandy's Dining was a treat for the senses. The menu is diverse, catering to various tastes, and the quality of the food is top-notch. The ambiance is chic yet comfortable!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Black Panther</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/hawkeye.jpg" alt="">
            <p>A fantastic dining experience at Septiandy's Dining! The food is exceptional, with creative twists on classic dishes. The presentation is beautiful, and the flavors are divine. Can't wait to come back!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Hawkeye</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/witch.jpg" alt="">
            <p>Septiandy's Dining exceeded my expectations! The culinary artistry is evident in every dish, and the flavors are perfectly balanced. The service is prompt and courteous!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
            </div>
            <h3>Scarlett Witch</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>

<!-- reviews section ends -->



















<!-- footer section starts  -->
<?php include 'components/footer.php'; ?>
<!-- footer section ends -->=






<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
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