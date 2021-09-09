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
                    
                      <img src="images/hair1.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                      <div class="card-body">
                          <h5 class="font cd-title card-title">L'Oreal Paris Total Repair 5 Restoring Conditioner with Keratin XS, 192.5ml</h5>
                      
                      <p class="font card-text lead star"><h6>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star far fa-star"></i>
                      </h6></p>
                      <p class=" card-text lead" ><strong>₹ 139</strong></p>
                      <p class="card-text lead">
                      <div class="accordion">
                        <div class="contentBx">
                          <details>
                              <summary class="font label">About</summary>
                              <p class="font detail">Helps fight against the five visible signs of damaged hair - hair fall, dryness, roughness, dullness, and split ends<br>
                                Powered by 9% Repair Concentrate with Keratin XS<br>
                                Restoring Conditioner for damaged hair<br>
                                Repairs and reinforces fibre's strength for silky and healthy looking hair<br>
                                Salicylic Acid content percentage as ingredient of 0.2 % ww</p>
                          </details>
                          <details>
                              <summary class="label font">Benefits</summary>
                              <p class="font detail" >L'Oreal Paris Total Repair 5 Repairing conditioner helps fight against the five visible signs of damaged hair - Hair fall, dryness, roughness, dullness and split ends without weighing it down. Damaged hair can lack the natural cement which keeps the hair strong and resilient.
                                </p>
                          </details>
                          <div class="container">
                              <img src="images/hair11.jpg" alt="" srcset="" style="max-width: 100%;
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