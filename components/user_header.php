<?php
   if(isset($message)){
      foreach($message as $message){
         echo '
         <div class="message">
            <span>'.$message.'</span>
            <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
         </div>
         ';
      }
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>  
<style>
   .end{
      margin-left: 5pc;
   }
</style>
</head>
<header class="header">

   <section class="flex">
  

      <nav class="navbar">
         <a href="home.php">Home</a>
         <a href="shop.php">Shop Now</a>
         <a href="orders.php">Orders</a>
         <a href="customer.html">Our Family</a>
         <a href="offers.html">Existing Offers</a>
      </nav>

      <div class="icons">
         <?php
            $count_wishlist_items = $conn->prepare("SELECT * FROM `wishlist` WHERE user_id = ?");
            $count_wishlist_items->execute([$user_id]);
            $total_wishlist_counts = $count_wishlist_items->rowCount();

            $count_cart_items = $conn->prepare("SELECT * FROM `cart` WHERE user_id = ?");
            $count_cart_items->execute([$user_id]);
            $total_cart_counts = $count_cart_items->rowCount();
         ?>
         <div id="menu-btn" class="fas fa-bars"></div>
         <a href="search_page.php"><i class="fas fa-search"></i></a>
         <a href="home.php" class="logo"> <img src="images/logomain.png" class="end" width="42px" height="42px" alt=""><span></span></a>
         <a href="cart.php"><i class="fas fa-shopping-cart end"></i><span>(<?= $total_cart_counts; ?>)</span></a>
         <div id="user-btn" class="fas fa-user "></div>
      </div>

      <div class="profile">
         <?php          
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <p><?= $fetch_profile["name"]; ?></p>
         <a href="update_user.php" class="btn">Update Profile.</a>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Register.</a>
            <a href="user_login.php" class="option-btn">Login.</a>
         </div>
         <a href="components/user_logout.php" class="delete-btn" onclick="return confirm('logout from the website?');">logout</a> 
         <?php
            }else{
         ?>
         <p>Please Login Or Register First to proceed !</p>
         <div class="flex-btn">
            <a href="user_register.php" class="option-btn">Register</a>
            <a href="user_login.php" class="option-btn">Login</a>
         </div>
         <?php
            }
         ?>      
         
         
      </div>

   </section>

</header>