<?php

include 'components/connect.php';

session_start();

if (isset($_SESSION['user_id'])) {
   $user_id = $_SESSION['user_id'];
} else {
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta name="viewport" 
      content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
   <title>1514Gobananas</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   <link rel="icon" href="images/logomain.png" type="image/icon type">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <style>
      .gobananas {
         margin-top: 50px;
      }

      .context {
         margin-left: 100px
      }

      .Font {
         font-family:'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
         font-size: 30px;
      }

      .space{
         display: flex;
         justify-content: space-evenly;
      }
   </style>

</head>

<body>

   <?php include 'components/user_header.php'; ?>

   <div class="home-bg">

      <section class="home">

         <div class="swiper home-slider">

            <div class="swiper-wrapper">

               

               <div class="swiper-slide slide">
                  <div class="image">
                     <!-- <img src="images/home-img-1.png" alt=""> -->
                     <img class="gobananas" src="images/logomain.png" width="60pc" height="60pc" alt="">
                  </div>
                  <div class="content">
                     <p class="Font">Welcome to 1514 Kidswear! where comfort meets style for your little ones! Discover playful, quality clothing designed to keep kids cozy, happy, and ready for every adventure. Shop with us and let their personality shine!</p>
                     <!-- <a href="category.php?category=Zigee" class="btn">Shop Now.</a> -->
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-2.png" alt="">
                  </div>
                  <div class="content">
                     <span>Upto 30% off</span>
                     <h3>Latest Cordset</h3>
                     <a href="category.php?category=cordset" class="btn">Shop Now.</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-3.png" alt="">
                  </div>
                  <div class="content">
                     <span>Upto 20% off</span>
                     <h3>Latest Designs</h3>
                     <a href="category.php?category=cordset" class="btn">Shop Now.</a>
                  </div>
               </div>

               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-img-4.png" alt="">
                  </div>
                  <div class="content">
                     <span>Upto 20% off</span>
                     <h3>Exclusive Designs</h3>
                     <a href="category.php?category=cordset" class="btn">Shop Now.</a>
                  </div>
               </div>
               <div class="swiper-slide slide">
                  <div class="image">
                     <img src="images/home-bg-home.png" alt="">
                  </div>
                  <div class="content">
                  <span><b>Upto 50% off</b></span><br>
                     <a href="category.php?category=cordset" class="btn">Shop Now.</a>
                  </div>
               </div>
            </div>

            <div class="swiper-pagination"></div>

         </div>

      </section>

   </div>

   <section class="category">

      <h1 class="heading">Shop by Category</h1>

      <div class="swiper category-slider">

         <div class="swiper-wrapper">

            <a href="category.php?category=boyz bottom" class="swiper-slide slide">
               <img src="images/icon-1.png" alt="">
               <h3>Boyz Bottom's</h3>
            </a>

            <a href="category.php?category=girlz bottom" class="swiper-slide slide">
               <img src="images/icon-2.png" alt="">
               <h3>Girlz Bottom's</h3>
            </a>

            <a href="category.php?category=Boyz Cordset" class="swiper-slide slide">
               <img src="images/icon-3.png" alt="">
               <h3>Boyz Cordset</h3>
            </a>

            <a href="category.php?category=Girlz Cordset" class="swiper-slide slide">
               <img src="images/icon-4.png" alt="">
               <h3>Girlz Cordset</h3>
            </a>

            <a href="category.php?category=Boyz Denim" class="swiper-slide slide">
               <img src="images/icon-5.png" alt="">
               <h3>Boyz Denim's</h3>
            </a>

            <a href="category.php?category=Girlz Denim" class="swiper-slide slide">
               <img src="images/icon-6.png" alt="">
               <h3>Girlz Denim's</h3>
            </a>

            <a href="category.php?category=Baby Boyz" class="swiper-slide slide">
               <img src="images/icon-7.png" alt="">
               <h3>Baby Boyz</h3>
            </a>

            <a href="category.php?category=Baby Girls" class="swiper-slide slide">
               <img src="images/icon-8.png" alt="">
               <h3>Baby Girls</h3>
            </a>
            <a href="category.php?category=Party Wear Froks" class="swiper-slide slide">
               <img src="images/icon-9.png" alt="">
               <h3>Party Wear Froks</h3>
            </a>
            <a href="category.php?category=Bundle of Joy" class="swiper-slide slide">
               <img src="images/icon-10.png" alt="">
               <h3>Bundle of Joy</h3>
            </a>
            <a href="category.php?category=Accessories" class="swiper-slide slide">
               <img src="images/icon-11.png" alt="">
               <h3>Accessories</h3>
            </a>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>


   
   <section class="home-products">

      <h1 class="heading">Latest products</h1>

      <div class="swiper products-slider">

         <div class="swiper-wrapper">

            <?php
            $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 6");
            $select_products->execute();
            if ($select_products->rowCount() > 0) {
               while ($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)) {
            ?>
                  <form action="" method="post" class="swiper-slide slide">
                  <input type="hidden" name="size" value="<?= $fetch_product['size']; ?>">

                     <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
                     <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
                     <input type="hidden" name="size" value="<?= $fetch_product['size']; ?>">
                     <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
                     <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
                     <button class="fas fa-heart" type="submit" name="add_to_wishlist"></button>
                     <a href="quick_view.php?pid=<?= $fetch_product['id']; ?>" class="fas fa-eye"></a>
                     <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
                     <div class="name"><?= $fetch_product['name']; ?></div>
                     <div class="name"><?= $fetch_product['size']; ?></div>
                     <div class="flex">
                        <div class="price"><span>Rs.</span><?= $fetch_product['price']; ?><span>/-</span></div>
                        <input type="number" name="qty" class="qty" min="1" max="99" onkeypress="if(this.value.length == 2) return false;" value="1">
                     </div>
                     <input type="submit" value="add to cart" class="btn" name="add_to_cart">
                  </form>
            <?php
               }
            } else {
               echo '<p class="empty">no products added yet!</p>';
            }
            ?>

         </div>

         <div class="swiper-pagination"></div>

      </div>

   </section>









   <?php include 'components/footer.php'; ?>

   <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

   <script src="js/script.js"></script>

   <script>
      var swiper = new Swiper(".home-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 3,
      },
      768: {
        slidesPerView: 4,
      },
      1024: {
        slidesPerView: 5,
      },
   },
});

var swiper = new Swiper(".products-slider", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 3,
      },
   },
});



var swiper = new Swiper(".home-slider1", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination1",
      clickable:true,
    },
});

 var swiper = new Swiper(".category-slider1", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination1",
      clickable:true,
   },
   breakpoints: {
      0: {
         slidesPerView: 2,
       },
      650: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
   },
});

var swiper = new Swiper(".products-slider1", {
   loop:true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination1",
      clickable:true,
   },
   breakpoints: {
      550: {
        slidesPerView: 2,
      },
      768: {
        slidesPerView: 2,
      },
      1024: {
        slidesPerView: 2,
      },
   },
});
   </script>

</body>

</html>