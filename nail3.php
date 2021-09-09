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
<!-- <link rel="stylesheet" href="style.css"> -->
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
                    
                      <img src="images/nail3.jpg" class="img-fluid rounded-start" alt="..." >
                  </div>
                  <div class="col-md-7">
                      <div class="card-body">
                          <h5 class="font cd-title card-title">LAKMÉ Absolute Gel Stylist Nail Color, Vineyard, 12ml</h5>
                      
                      <p class="font card-text lead star"><h6>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star far fa-star"></i>
                      </h6></p>
                      <p class=" card-text lead" ><strong>₹ 243</strong></p>
                      <p class="card-text lead">
                      <div class="accordion">
                        <div class="contentBx">
                          <details>
                              <summary class="font label">About</summary>
                              <p class="font detail">High-shine formula<br>
                                Glossy finish<br>
                                long-lasting nail colour<br>
                                Easy one stroke application<br>
                                Unique brush<br>
                                50 dazzling shades<br>
                                Rich color with intense payoff
                            </p>
                          </details>
                          <details>
                              <summary class="label font">Benefits</summary>
                              <p class="font detail" >Gel-like perfection on your nails is now as easy as a single stroke with Lakmé Absolute Gel Stylist nail colors. Its high shine formula and gel-like consistency delivers stunning nails with intense color payoff. The unique and innovative brush glides easily onto nails in one easy swipe and can be used to create eye-catchy nail art as well. With rich and deep colors, and intense gloss finish, get DIY salon-like nails from the comfort of your home. Now choose from a range of 50 dazzling shades! Get spoilt for choice with a plethora of pretty pastels, beautifully bold and vivaciously vibrant shades. Be it solids, metallics or shimmer, there’s a texture for everyone! Recommended by Lakmé Makeup Experts, get professional finish gel-like nails every single time.
                                </p>
                          </details>
                          <details>
                              <summary class="label font" >How To Apply</summary>
                              <p class="font detail" >Step 1: Twist cap and remove the excess product while removing the brush out.<br> Step 2: Swipe the brush in a straight line from the base to the tip of your nail, starting from the centre. <br> Step 3: Repeat process on both sides of the centre line, leaving no empty spots on the nail.<br>  Step 4: Ensure that the first coat is completely dry before adding a second coat. Two coats are recommended. product while removing the brush out.</p>
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