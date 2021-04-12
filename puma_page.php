<?php
session_start();
$id=101;
$_SESSION['item']=$id;
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Puma Jeans</title>
   </head>
  <body>
  <form name="form2" action="cart.php" method="POST">  
    <div>
      <h1 class="text-center">PUMA JEANS</h1>
      <hr class="w-25">
    </div>
<div class="container-fluid mb-4 mt-5">
  <div class="row">
    <div class="col-lg-6 col-md-6 col-12">
      <img src="images/puma/download1.jpg" class="img-fluid">
    </div>
    <div class="col-lg-6 col-md-6 col-12">
      <h4>PRODUCT DETAILS</h4>
      <hr>
      <h7>Black dark wash 5-pocket mid-rise jeans, clean look with no fade, has a button and zip closure, waistband with belt loops</h7>
      <br>
      <br>
      <h6>Size & Fit</h6>
      <h7>Skinny Fit<br>
          Stretchable<br>
          The model (height 6') is wearing a size 32
      </h7><br><br>
      <h6>Material & Care</h6>
      <h7>Cotton and elastane<br>
Machine-wash</h7><br><br>
      <h6>Specifications</h6>
      <div class="row">
        <div class="col-lg-6 col-md-6 col-6"><br>
          <h6>distress</h6>
          <h7>clean look</h7>
          <hr>
          <h6>Fade</h6>
          <h7>No Fade</h7>
          <hr>
          <h6>Fit</h6>
          <h7>Skiny Fit</h7>
          <hr>
          <h6>Waist Band</h6>
          <h7>With belt loops</h7>
          <hr>
          <h6>Closure</h6>
          <h7>Button and Zip</h7>
          <hr>
        </div>
        <div class="col-lg-6 col-md-6 col-6"><br>
           <h6>Wiast-Rise</h6>
          <h7>Mid Rise</h7>
          <hr>
          <h6>Shade</h6>
          <h7>Dark</h7>
          <hr>
          <h6>length</h6>
          <h7>Regular</h7>
          <hr>
          <h6>Stretch</h6>
          <h7>Stretchable</h7>
          <hr>
          <h6>Reversible</h6>
          <h7>No</h7>
          <hr>
          <br>
        </div>
        <br>
        <br>
        <h6>Complete The Look</h6>
        <h7>Round out your denims collection with a pair of skinny-fit jeans from Puma. Dress them up with your favourite blazer and some comfortable easy loafers when you have an important work presentation.</h7>
      </div>
    </div>
  </div>
</div>
<div>
  <h4>Price: Rs.1400 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Quantity: <input type="textbox" name="quantity"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="submit" value="Add To Cart">  
  </h4>

</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>