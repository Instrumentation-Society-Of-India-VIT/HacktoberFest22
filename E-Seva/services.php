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

    <link rel="stylesheet" href="services.css">
</head>
<body>
    
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


     <section class="main">
         <h1>Services</h1>
<div class="select">
   
    <div id="first">
        <a>AAadhar Verification</a>
        <a>Application Registration</a>
        <a>Apply for Certificate</a>
        <a>Land Records</a>
        <a href="complaint_form.php">File Complaint</a>
        
    </div>
    <div id="second">
        
        <a>Payment of Dues</a>
        <a>Tele-agriculture</a>
        <a>E-education</a>
    </div>

</div>

    </section>

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

</body>
</html>