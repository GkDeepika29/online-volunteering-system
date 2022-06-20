<!DOCTYPE html>
<html>
<head>
	<title>SIGN UP</title>
	<link rel="stylesheet" type="text/css" href="signup.css">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>www.online volunteering system
  </title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<link rel="stylesheet" href="footer.css">
</head>
<body onload = "getLocation();">
<header>
        <nav class="navbar navbar-expand-lg navbar-dark p-3 mb-2 bg-dark">
            <div class="container-fluid">
                <img src="logo5.jpg" alt="image1">
                <a class="navbar-brand" href="#">Online Volunteering system</a> 
                 <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse justify-content-end mr-5" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="ind.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="services.html">Services</a>
                  </li>
                  <li class="nav-item ">
                    <a class="nav-link active" href="login.php">Login</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="signup.php">Sign Up</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="post1.php">Post an emergency</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active"  href="aboutus.html">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link active" href="contact1.php">Contact Us</a>
                  </li>
                </ul>
              </div>
              </nav>
    </header>
    <section>
     <form class="myForm" action="registration_code.php" method="post" autocomplete="off">
     	<h2>Register as a Volunteer</h2>
     	<p>Please fill this form to create an account.</p>

     	<label>User Name</label>
     	<input type="text" 
                 name="username" 
                 placeholder="enter your name"><br>
        <label>Gender</label>
     	<input type="text" 
                 name="gender" 
                 placeholder="enter your gender"><br>   
          
          <label>Address</label>
     	<input type="text" 
                 name="address" 
                 placeholder="enter your address"><br> 
          <label>Pincode</label>
     	<input type="text" 
                 name="pincode" 
                 placeholder="enter your pincode"><br>         
          <label>Phone Number</label>
     	<input type="text" 
                 name="phno" 
                 placeholder="enter your phone number"><br>
          <label>E-Mail</label>
     	<input type="email" 
                 name="email" 
                 placeholder="enter your email"><br>         
          <label>Password</label>
     	<input type="password" 
                 name="password" 
                 placeholder="Password"><br>


          <label>Confirm Password</label>
          <input type="password" 
                 name="cpassword" 
                 placeholder="confirm your Password"><br>
          <input type="hidden" name="latitude" value="">
          <input type="hidden" name="longitude" value="">
     	<button type="submit" name="submit">Sign Up</button>
          <a href="login.php" class="ca" id="di">Already have an account?</a>
     </form>
     <script>
     function getLocation(){
        if(navigator.geolocation){
          navigator.geolocation.getCurrentPosition(showPosition,showError);
        }
      }
      function showPosition(position){
        document.querySelector('input[name="latitude"]').value = position.coords.latitude;
        document.querySelector('input[name="longitude"]').value = position.coords.longitude;
      }
      function showError(error){
        switch(error.code){
          case error.PERMISSION_DENIED:
          alert("You Must Allow The Request For Geolocation To Fill Out The Form");
          location.reload();
          break;
        }
      }
    </script>
  </section>
</body>
</html>