<!DOCTYPE html>
<?php

require_once("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<!-- Owl-carousel CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous" />

<!-- font awesome icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

<!-- Custom CSS file -->
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="pstyle.css">
<script src="index.php"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
    <?php
        include 'header2.php';
    ?>
    </header>
    <section class="product">
    <div class="container">
        <div class="container shadow p-3 mb-5 bg-body rounded">
            
              <div class="row">
                  <div class="col-md-5">
                    
                      <img src="images/eye4.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                      <div class="card-body">
                          <h5 class="font cd-title card-title">Colorbar Waterproof Liquid Eyeliner, Black, 2.5ml</h5>
                      
                      <p class="font card-text lead star"><h6>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star far fa-star"></i>
                      </h6></p>
                      <p class=" card-text lead" ><strong>₹ 335</strong></p>
                      <p class="card-text lead">
                      <div class="accordion">
                        <div class="contentBx">
                          <details>
                              <summary class="font label">About</summary>
                              <p class="font detail">With a flexible felt tip applicator, Precision Waterproof Eyeliner defines your eyes through thick and thin. The quick-drying, waterproof formula remains flawlessly intense without smudging, flaking or cracking.Mineral-oil-free. Formaldehyde-free.</p>
                          </details>
                          <details>
                              <summary class="label font">Benefits</summary>
                              <p class="font detail" >Our waterproof eyeliner delivers intense color without flaking or smudging.Suitable for those with sensitive eyes and contact lenses.Dermatologically and ophthalmologically tested.
                                </p>
                          </details>
                          <details>
                              <summary class="label font" >How To Apply</summary>
                              <p class="font detail" >Shake the bottle well, start from the inner corner of the eye, move to the outer corner, draw a line as fine or thick as you want it to be – your eyes are a beautiful blank slate and Precision is your pen.Pro-tip:The Kitten: thicker than the tightline, more subtle than the cat-wing. Draw a thin line along the upper lashline, from the inner corner to the outermost corner of the eyelid. At the outermost corner, draw a soft flick upwards, like drawing a natural extension of your lower waterline.</p>
                          </details>
                        </div>
                        </div>
                      </p>
                      <p>
                          <div class="font btn-toolbar" role="toolbar" aria-label="Toolbar with button groups">
                              <div class="font btn-group mr-2" role="group" aria-label="First group">
                                  <form action="" method="">
                                      <button class="font cbutton cart-button btn " type="submit">Add to Cart</button>
                                  </form>
                              </div>
                              <div class="font btn-group mr-2" role="group" aria-label="First group">
                                  <form action="" method="">
                                      <button class="font cbutton cart-button btn " type="submit">Add to Wishlist</button>
                                  </form>
                              </div>
                          </div>
                          </p>
                      </div>
                  </div>
              </div>
            
          </div>
       
    </section>
    <footer>
    <?php
        include 'footer.php';
    ?>
    <!-- <script>
        $("footer").load("footer.html");
    </script> -->
</footer>
        
</body>
</html>