<!DOCTYPE html>
<html>
<head>
<title>DASHBOARD</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="familyfont.css">
<link rel="stylesheet" href="font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: rgb(54, 204, 112);}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
</head>
<body class="w3-green">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->

  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#profile" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>PROFILE</p>
  </a>
  <a href="#GENERATE" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>VIEW TIMETABLE</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>CONTACT</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#profile" class="w3-bar-item w3-button" style="width:25% !important">PROFILE</a>
    <a href="#Generate" class="w3-bar-item w3-button" style="width:25% !important">GENERATE</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">CONTACT</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-lightgreen" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small">Meru </span> University of science and technology Computer scheduling system.</h1>
    <p>A world class University of science and technology</p>
    <!-- <img src="greencolur.jpg" alt="boy" class="w3-image" width="992" height="1108"> -->
  </header>

  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="profile">
    
    <h2 class="w3-text-light-grey"> <A HREF="registrationfrm.html">UPDATE YOUR DETAILS FROM HERE</A></h2>
    <hr style="width:200px" class="w3-opacity">
   
    <h3 class="w3-padding-16 w3-text-light-grey">FACULTY</h3>
    <p class="w3-wide">SCHOOL OF COMPUTING</p>
    <div class="w3-white">
      
    </div>
    <p class="w3-wide">SCHOOL OF HEALTH SCIENCES</p>
    <div class="w3-white">
    
    </div>
    <p class="w3-wide">SCHOOL OF Engineering</p>
    <div class="w3-white">
      
    </div><br>
    
   

    </div>
    
    
  </div>
  

  <!-- Portfolio Section -->
  <div class="w3-padding-64 w3-content" id="generate">
    <h2 class="w3-text-light-grey">GENERATE</h2>
    <hr style="width:200px" class="w3-opacity">

   
    
      
    </div>
  <!-- End Portfolio Section -->
  </div>

  <!-- Contact Section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Contact US</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <p><i class="fa fa-map-marker fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> KENYA,MERU</p>
      <p><i class="fa fa-phone fa-fw w3-text-white w3-xxlarge w3-margin-right"></i> Phone: 0792173545</p>
      <p><i class="fa fa-envelope fa-fw w3-text-white w3-xxlarge w3-margin-right"> </i> Email: must.ac.ke</p>
    </div><br>
    <p>Let's get in touch. Send me a message:</p>

  <!-- End Contact Section -->
  </div>
  
    <!-- Footer -->
  <footer class="w3-content w3-padding-64 w3-text-grey w3-xlarge">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
    <p class="w3-medium">@ <a href="https://www.must.ac.ke" target="_blank" class="w3-hover-text-green">www.must.ac.ke</a></p>
  <!-- End footer -->
  </footer>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>