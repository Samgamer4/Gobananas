<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport"
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   <title>About</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="icon" href="images/logomain.png" type="image/icon type">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .song {
         display: none;
      }

      .btn {
         margin-left: 7pc;
      }
   </style>
</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <section class="about">

      <div class="row">

         <div class="image">
            <img src="images/IMG_1719.png" height="490px" alt="mainimg">
            <audio class="song" controls autoplay loop>
               <source src="uploaded_img/audio.mpeg" type="audio/mpeg">
            </audio>
         </div>

         <div class="content">
            <h3>The Bastawala Brothers - Founders of 1514.Gobananas Kidswear:</h3>
            <p>"From the Beginning, Just for Kids - A Message from Ansar & Abrar Bastawala"

               "As brothers and proud founders of 1514 Kidswear, our journey began with a simple yet powerful idea: to create a brand where kids feel stylish, comfortable, and celebrated. Every collection we design brings together our passion for quality, playful style, and a dedication to crafting clothes that reflect the vibrancy and joy of childhood. Our hope is that every piece from 1514 Kidswear adds a touch of happiness to your little one's day. Thank you for being part of our family!"

            </p>

            <p>"Thank you for trusting us and making 1514 Kidswear a part of your lives. Your support and loyalty mean the world to us, and we’re grateful to have you with us on this journey. Here’s to many more joyful moments together!"<a href="https://www.instagram.com/1514.kidsstreet?igsh=MXAydWJxd3p6d2Nnbg==" target="_blank">Our Family</a> </p>
            <a href="contact.php" class="btn">Contact Us</a>
         </div>

      </div>

   </section>

   <section class="reviews">

      <h1 class="heading">Client's Reviews.</h1>

      <div class="swiper reviews-slider">

         <div class="swiper-wrapper">

            <div class="swiper-slide slide">
               <img src="images/pic-5.jpg" alt="">
               <p>The name "1514GoBananas" is unique and memorable, giving off a fun and playful vibe that ideal for capturing attention. Its combination of numbers and words stands out, lending a distinctive look that can make a brand feel lively and energetic. </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3> <a>Aisha Rahman</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-1.jpg" alt="">
               <p> If "1514GoBananas" has a particular meaning, it could be beneficial to share that with the audience, perhaps through the brand story, which would make the name feel more connected and purposeful. "Go Bananas" is exciting and fun.</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a>Amina Siddiqui</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-3.jpg" alt="">
               <p>If "1514Gobananas" has significance, consider adding it to the brand story to make the name feel more connected. You might experiment with the layout, like "GoBananas1514" or even a variation without numbers if clarity is a priority. Overall, its a name with a lot of potential!</p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a>Hana Ansari</a></h3>
            </div>

            <div class="swiper-slide slide">
               <img src="images/pic-7.jpg" alt="">
               <p>The name "1514GoBananas" is both eye-catching and memorable, blending an intriguing mix of numbers with the playful phrase "Go Bananas." This combination sets a lively tone that could appeal to a diverse, fun-seeking audience. </p>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
               <h3><a>Mariam Khan</a></h3>
            </div>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".reviews-slider", {
         loop: true,
         spaceBetween: 20,
         pagination: {
            el: ".swiper-pagination",
            clickable: true,
         },
         breakpoints: {
            0: {
               slidesPerView: 1,
            },
            768: {
               slidesPerView: 2,
            },
            991: {
               slidesPerView: 3,
            },
         },
      });
   </script>

</body>

</html>