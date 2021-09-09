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
                    
                      <img src="images/hair2.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                      <div class="card-body">
                          <h5 class="font cd-title card-title">L'Oreal Paris Dream Lengths Conditioner, 192.5 ml</h5>
                      
                      <p class="font card-text lead star"><h6>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star far fa-star"></i>
                      </h6></p>
                      <p class=" card-text lead" ><strong>₹ 167</strong></p>
                      <p class="card-text lead">
                      <div class="accordion">
                        <div class="contentBx">
                          <details>
                              <summary class="font label">About</summary>
                              <p class="font detail">Save your last 3 cms with L’Oréal Paris Dream lengths No Haircut Cream (Leave in Cream) formulated with vegetal keratin, castor oil and vitamins B3 and B5 for longer hair!
                                This Sulphate free and Paraben-free hair cream for damaged hair helps seal split ends and reduces breakage.
                                This hair repair cream offers up to 180 degree heat protection for your hair and is ideal to use before styling.
                                Suitable for long hair, damaged hair, dry hair, hair with split ends and frizzy hair
                                For Best Results, use the full L’Oréal Paris Dream Lengths system for your long hair care routine. After shampoo and conditioner, apply No Haircut Cream (Leave In) on damp hair, leave in and style as usual.</p>
                          </details>
                          <details>
                              <summary class="label font">Benefits</summary>
                              <p class="font detail" >Save the last 3 cms of your hair and get the long hair of your dreams with the new L’Oréal Paris Dream Lengths Detangling Conditioner. A perfect conditioner for dry and damaged hair, the Dream Lengths Detangling Conditioner instantly detangles long hair for smoother hair with less breakage. Get rid of knots and tangles and achieve all your goals of soft, smooth, and shiny hair with this L’Oréal Conditioner. The vegetal keratin and vitamin B3 and B5 in this conditioner seals damaged tips while castor oil prevents hair breakage and promotes healthy growth for longer and stronger hair – a great conditioner for hair growth! Style, twist, and tie your hair without any worry with the new L’Oréal Paris Dream Lengths Detangling Conditioner. For best results and reduced hair breakage, use after the L’Oréal Dream Lengths Restoring Shampoo and follow up with the L’Oréal Dream Lengths No Haircut Cream (Leave In Cream). How To Use?: Apply to wet hair from lengths to tips after shampooing. Leave the conditioner on for a few minutes and rinse thoroughly.
                                </p>
                          </details>
                          <div class="container">
                              <img src="images/hair21.jfif" alt="" srcset="" style="max-width: 100%;
                              height: auto;">
                          </div>
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