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
   <title>OMG Philippines | Franchise</title>   
   <link rel="icon"  href="images/omg-logo.png">

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <!-- Own Carousel -->
 <link rel="stylesheet" href="css/owl.carousel.min.css">


  
   <!-- custom css file link  -->
   <link rel="stylesheet" href="./css/style2.css">
   <link rel="stylesheet" href="css/bootstrap.css">


</head>
<body>

<?php include 'components/user_header.php'; ?>
  

<!--------------------- Franchising 1 ------------------>

<div class="video">
    <video src="images/OMG-video.mp4" autoplay muted loop></video>
</div>

<div class="OMG-brief-history">
    <p id="history-box-1">
        OMG milktea, milkshake, and coffee started last three years, just when pandemic 2020 started.
    </p>
<<<<<<< Updated upstream
    <p id="history-box-2">
=======
    <p id="history-box-2"> 
>>>>>>> Stashed changes
        Now that everybody are quarantined, they tried to know what the 
        netizens' are looking for and what they want. At first, they strive 
        to make their milktea, a popular beverage here in Philippines. 
        It was a success for them because the netizens liked it, and 
        it was also a stepping stone for them when they tried to make 
        another beverages like Milkshake and coffee. Many people loved and 
        supported their continously upgrading beverages. Because of this, 
        they are slowly shining.
    </p>
<<<<<<< Updated upstream
    <p id="history-box-3">
=======
    <p id="history-box-3"> 
>>>>>>> Stashed changes
        In growing their business, in just two years they managed to franchise
        in different parts in Laguna, even here in Manila, lastly, they are
        now open for franchising nationwide.    
    </p>    

</div>

<div class="Franchise-Now">
    <h4>Franchise NOW!</h4>
</div>

<div class="follow">
    <h3>With 1.3 million followers in the food indistry</h3>
    <img src="./images/icons/check black.png" alt="check mark">
</div>

<div class="franchise">
    <h3>Franchise are multi-awarded in the field of customer service and training</h3>
    <img src="./images/icons/check white.png" alt="check mark">
</div>

<div class="food-panda">
    <h3>Food panda integrated</h3>
</div>

<div class="sales">
    <h3>Proven sales record</h3>
</div>

<div class="products">
    <h3>Products are very affordable yet the ingredients are of the highest quality</h3>
</div>

<div class="fastest">
    <h3>Fastest growing and trending franchise</h3>
</div>

<div class="Legit">
    <h3>Legit and promoted but the VIPs</h3>
</div>

<div class="TOFIL">
    <h3>The Outstanding Filipino 2019 Recognized</h3>
</div>

