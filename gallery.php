<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gallery.css">

    <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">

</head>
<body>

  
    <div class="header">
        <div class="headerimg1">
            <img src="./images/logo.jpeg" alt="" width="120px" height="100px">
        </div>
        <div class="headertitle">
            <h1>ANIL EDUCATION AND CULTURAL SOCIETY</h1>
            <H4> VPO JAHU, TEHSIL BHORANJ,DISTT HAMIRPUR (H.P.) 176048</H4>
        </div>
        <div class="headerimg2">
            <img src="./images/logo.jpeg" alt="" width="120px" height="100px">
        </div>
    </div>


    <nav class="navbar" style="position: sticky; top: 0;">
        <div class="navbar-container container">
            <input type="checkbox" name="" id="">
            <div class="hamburger-lines">
                <span class="line line1"></span>
                <span class="line line2"></span>
                <span class="line line3"></span>
            </div>
            <ul class="menu-items">
                <li><a href="./index.php">Home</a></li>
                <!-- <li><a href="#about">About</a></li> -->
                <!-- <li><a href="./gallery.html">Gallery</a></li> -->
                <!-- <li><a href="">Menu</a></li> -->
                <!-- <li><a href="#contact">contact Us</a></li> -->
                <li><a href="./registration.php">Registration</a></li>
            </ul>
            <h1 class="logo">AECS</h1>
        </div>
      </nav>
        
    <section class="home"></section>
    <!-- <nav>
        <div class="navbar">
            <ul>
               <a href=".//index.html"> <li class="bi bi-house-door">Home</li></a>
                <a href="#about-us-section"><li class="bi bi-file-person">About Us</li></a>
                <a href=""><li class="bi bi-book">Courses</li></a>
                <a href=""><li class="bi bi-calendar-event">Events</li></a>
                <a href=""><li class="bi bi-projector">Projects</li></a>
               <a href="./gallery.html"> <li class="bi bi-images">Gallery</li></a>
              <a href="./index.html">  <li class="bi bi-telephone">Contact Us</li></a>
             <a href="">   <li class="bi bi-currency-rupee">Addmission Fees</li></a>
            </ul>
        </div>
    </nav> -->

<div class="gallerybtn">
    <button onclick="allimages()">All </button>
    <button onclick="tour()">Tour and Picnic</button>
    <button onclick="events()">Events</button>
    <button onclick="institute()">Institute</button>
</div>
 <!-- The Image Gallery -->
 <div class="gallery">
<!-- ----------------------------TOUR IMAGES -->
<img src="./images/tour/2021 batch tour.JPG" alt="Image 1" class="thumbnail" id="image1">
<img src="./images/tour/prashar tour.jpg" alt="Image 2" class="thumbnail" id="image2">
  <img src="./images/tour/tour 1.jpg" alt="Image 3" class="thumbnail" id="image3">
  <img src="./images/tour/tour 2.jpg" alt="Image 4" class="thumbnail" id="image4">
  <img src="./images/tour/tour 3.jpg" alt="Image 5" class="thumbnail" id="image5">




  <!-- -------------------------LAB IMAGES -->
  <img src="./images/institute/2022 batch.jpg" alt="Image 6" class="thumbnail" id="image6">
  <img src="./images/institute/class photo .jpg" alt="Image 7" class="thumbnail" id="image7">
  <img src="./images/institute/entrance.jfif" alt="Image 8" class="thumbnail" id="image8">
  <img src="./images/institute/lab 1.jpg" alt="Image 9" class="thumbnail" id="image9">
  <img src="./images/institute/lab 2.jpg" alt="Image 10" class="thumbnail" id="image10">
  <img src="./images/institute/lab 3.jpg" alt="Image 10" class="thumbnail" id="image11">
  <img src="./images/institute/reception.jpg" alt="Image 10" class="thumbnail" id="image12">

  <!-- -----------------------------EVENTS IMAGES -->
  <img src="./images/events/independence 1.jpg" alt="Image 11" class="thumbnail" id="image13">
  <img src="./images/events/independence 2.jpg" alt="Image 12" class="thumbnail" id="image14">

  <img src="./images/events/independence 3.jpg" alt="Image 13" class="thumbnail" id="image15">

  <img src="./images/events/independence 4.jpg" alt="Image 14" class="thumbnail" id="image16">

  <img src="./images/events/independence 5.jpg" alt="Image 15" class="thumbnail" id="image17">

  <img src="./images/events/independence 6.jpg" alt="Image 16" class="thumbnail" id="image18">

  <img src="./images/events/independence 7.jpg" alt="Image 17" class="thumbnail" id="image19">

  <img src="./images/events/independence 8.jpg" alt="Image 17" class="thumbnail" id="image20">
  <img src="./images/events/independence 9.jpg" alt="Image 17" class="thumbnail" id="image21">
  <img src="./images/events/independence 10.jpg" alt="Image 17" class="thumbnail" id="image22">

  <img src="./images/events/independence 11.jpg" alt="Image 17" class="thumbnail" id="image23">
  <img src="./images/events/independence 12.jpg" alt="Image 17" class="thumbnail" id="image24">

  <img src="./images/events/independence 13.jpg" alt="Image 17" class="thumbnail" id="image25">

  <img src="./images/events/independence 14.jpg" alt="Image 17" class="thumbnail" id="image26">



  <!-- You can repeat or dynamically load images with JavaScript -->
</div>

<!-- The Modal -->
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="modalImage">
</div>

<script src="script.js"></script>
</body>
</html>

<script src="./gallery.js"></script>
</body>
</html>