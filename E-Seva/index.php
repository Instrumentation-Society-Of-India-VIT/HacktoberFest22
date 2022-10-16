<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['submit'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = $_POST['number'];
   $date = $_POST['date'];

   $insert = mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, date) VALUES('$name','$email','$number','$date')") or die('query failed');

   if($insert){
      $message[] = 'appointment made successfully!';
   }else{
      $message[] = 'appointment failed';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>E-seva</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- bootstrap cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.1/css/bootstrap.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="style.css">

</head>
<body>
   
<!-- header section starts  -->

<header class="header fixed-top">

   <div class="container">

      <div class="row align-items-center justify-content-between">

         <a href="#home" class="logo"><b style="font-size:32px">E <span>Seva.</span></b></a>

         <nav class="nav">
            <a href="#home">home</a>
            <a href="#services">Services</a>
            <a href="#about">About</a>
            <a href="#reviews">Notifications</a>
            <a href="#contact">Language</a>
         </nav>

         <a href="register_form.php" class="link-btn">Login</a>

         <div id="menu-btn" class="fas fa-bars"></div>

      </div>

   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="container">

      <div class="row min-vh-100 align-items-center">
         <div class="content text-center text-md-left">
            <h3>let us ease your work</h3>
            <p>Electronic seva(E seva) is a form of e-governance aimed at providing speedier and efficient public services including issue of all the citizen related certificates,receiving all sorts of utility bills,redressing grievances,etc.</p>
            <a href="register_form.php" class="link-btn">Link to Aadhar</a>
         </div>
      </div>

   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <div class="container">

      <div class="row align-items-center">

         <div class="col-md-6 image">
            <img src="indiabg.jpg" class="w-100 mb-5 mb-md-0" alt="">
         </div>

         <div class="col-md-6 content">
            <span>about us</span>
            <h3>At your service 24*7</h3>
            <p>
The objective of ESeva is to provide smart, citizen centric, ethical, efficient and effective governance facilitated by technology. The initiative involves universal and non-discriminatory delivery of all government services to citizens & Businessmen of all strata and improved efficiency, transparency and accountability for the government. The initiative features transformed government-citizen interface at all levels of administration along with a shared governance model .</p>
            <a href="register_form.php" class="link-btn">Link to Aadhar</a>
         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading">our services</h1>

   <div class="box-container container">

      <div class="box">
         <img src="icon.png" alt="">
         <h3>Search for services</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="icon.png" alt="">
         <h3>ESeva certificate</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, non?</p>
      </div>

      <div class="box">
         <img src="icon.png" alt="">
         <h3>Know your application status</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon.png" alt="">
         <h3>Pay utility bills</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon.png" alt="">
         <h3>View land records</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>

      <div class="box">
         <img src="icon.png" alt="">
         <h3>WhatsApp support</h3>
         <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse, minima?</p>
      </div>
      
   </div>
   <a href="services.php" class="kmore" type="submit" style="color:white;border:1px solid #00b8b8;border-radius:.5rem;background-color:#00b8b8;padding:10px 23px 10px 23px;font-size:1.7rem;margin-left:560px;margin-top:50px;align:center;">Know more</a>

</section>

<!-- services section ends -->

<!-- process section starts  -->

<section class="process">

   <h1 class="heading">work process</h1>

   <div class="box-container container">
      <div class="box">
         <img src="iconnumber 1.png" alt="" >
         <h3>Tell us the government the service you want</h3>
         <p style="color:red">Tell the operator the government service you want, we have 100+ services including certificates and licenses ...</p>
      </div>

      <div class="box">
         <img src="iconnumber 2.png" alt="" width=500px>
         <h3>Submit the application</h3>
         <p style="color:red">Share your information with the operator at the e-Service Center to register the application and upon receipt of the payment fee (if any) for the service upon registration of the application.</p>
      </div>

      <div class="box">
         <img src="iconnumber 3.png" alt="" width=500px>
         <h3>Acknowledgement slip will be issued</h3>
         <p style="color:red">You will be notified of the status of the application you have submitted and if your certificate is approved, you can approach your nearest e-Service Center to obtain the certificate.</p>
      </div>

   </div>

</section>

<!-- process section ends -->

<!-- reviews section starts  -->
<!--
<section class="reviews" id="reviews">

   <h1 class="heading"> satisfied clients </h1>

   <div class="box-container container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos, iure? Nemo est aspernatur voluptatum id, laboriosam asperiores iure omnis alias?</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>john deo</h3>
         <span>satisfied client</span>
      </div>

   </div>

</section>
-->
<!-- reviews section ends -->

<!-- contact section starts  -->
<!--
<section class="contact" id="contact">

   <h1 class="heading">make appointment</h1>

   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
      <?php 
         if(isset($message)){
            foreach($message as $message){
               echo '<p class="message">'.$message.'</p>';
            }
         }
      ?>
      <span>your name :</span>
      <input type="text" name="name" placeholder="enter your name" class="box" required>
      <span>your email :</span>
      <input type="email" name="email" placeholder="enter your email" class="box" required>
      <span>your number :</span>
      <input type="number" name="number" placeholder="enter your number" class="box" required>
      <span>appointment date :</span>
      <input type="datetime-local" name="date" class="box" required>
      <input type="submit" value="make appointment" name="submit" class="link-btn">
   </form>  

</section>
      -->
<!-- contact section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <p>+123-456-7890</p>
         <p>+111-222-3333</p>
      </div>
      
      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>our address</h3>
         <p>mumbai, india - 400104</p>
      </div>

      <div class="box">
         <i class="fas fa-clock"></i>
         <h3>opening hours</h3> 
         <p>00:07am to 10:00pm</p>
      </div>

      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <p>kavyareddy@gmail.com</p>
         <p>nilipalli.kavya2020@gmail.com</p>
      </div>

   </div>

   <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Kavya N</span>  </div>

</section>

<!-- footer section ends -->


<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>