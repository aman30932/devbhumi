<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="registration.css">

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
      <div class="navbar-container container-nav">
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
              <!-- <li><a href="./registration.html">Registration</a></li> -->
          </ul>
          <h1 class="logo">AECS</h1>
      </div>
    </nav>



    <div class="container">
      <div class="title">Registration</div>
      <form action="regconn.php" method="post">
        <div class="user__details">
          <div class="input__box">
            <span class="details">Full Name</span>
            <input type="text" placeholder="E.g: John Smith" name="name" required>
          </div>
          <div class="input__box">
            <span class="details">Father Name</span>
            <input type="text" placeholder="abs kumar" name="father_name" required>
          </div>

          <div class="input__box">
            <span class="details">Mother Name</span>
            <input type="text" placeholder="abc devi" name="mother_name" required>
          </div>
          <div class="input__box">
            <span class="details">Email</span>
            <input type="email" placeholder="johnsmith@hotmail.com" name="email" required>
          </div>
          <div class="input__box">
            <span class="details">Phone Number</span>
            <input type="tel" placeholder="9876543210" name="number" required>
          </div>
          <div class="input__box">
            <span class="details">Date of Birth</span>
            <input type="date" placeholder="01-01-2001" name="dob" required>
          </div>
          <div class="input__box">
            <span class="details">Address</span>
            <input type="text" placeholder="Vill. Jahu, Tehsil Bhoranj, distt Hamirpur (H.P.)176048" name="address" required>
          </div>

          <div class="input__box">
            <span class="details">Qualification</span>
            <input type="text" placeholder="10th" name="qualification" required>
          </div>
    
        </div>
        <div class="gender__details">
          <input type="radio" name="gender" value = "male" id="dot-1">
          <input type="radio" name="gender" value = "female" id="dot-2">
          <input type="radio" name="gender" value = "other" id="dot-3">
          <span class="gender__title">Gender</span>
          <div class="category">
            <label for="dot-1">
              <span class="dot one"></span>
              <span>Male</span>
            </label>
            <label for="dot-2">
              <span class="dot two"></span>
              <span>Female</span>
            </label>
            <label for="dot-3">
              <span class="dot three"></span>
              <span>Prefer not to say</span>
            </label>
          </div>
        </div>





      
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>



   








      <script>
        
      </script>
</body>
</html>