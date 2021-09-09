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
                    
                      <img src="images/face2.jpg" class="img-fluid rounded-start" alt="...">
                  </div>
                  <div class="col-md-7">
                      <div class="card-body">
                          <h5 class="font cd-title card-title">LAKMÉ 9TO5 WEIGHTLESS MOUSSE FOUNDATION</h5>
                      
                      <p class="font card-text lead star"><h6>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star fas fa-star"></i>
                        <i class="star far fa-star"></i>
                      </h6></p>
                      <p class=" card-text lead" ><strong>₹ 403</strong></p>
                      <p class="card-text lead">
                      <div class="accordion">
                        <div class="contentBx">
                          <details>
                              <summary class="font label">About</summary>
                              <p class="font detail">Feather-light finish, the product easily blends into the skin keeping it healthy, hides pores & evens out skin tones. The SPF 8 formula protects the skin from sun damage, leaving it peachy-soft & naturally flawless for up to 16 hours.</p>
                          </details>
                          <details>
                              <summary class="label font">Benefits</summary>
                              <p class="font detail" >Lakmé 9 To 5WEIGHTLESS Mousse Foundation is your answer to a workings women’s barrier to using foundation. It is a lightweight foundation meant for everyday use. It is so lightweight that you won’t even feel you are wearing foundation. It not only blends in effortlessly, but gives a matte finish that lasts through the say. It is available in 4 shades and it extremely convenient to carry. Foundation with new formula that feels soft and incredibly weightless and is perfect for everyday office use. It blends effortlessly onto skin to conceal imperfections with a matte finish that stays through the day. With complete coverage it’s a foundation so weightless you may forget you are wearing any foundation, Matte finish in a weightless mousse texture, Pocket sized tube that is easy to carry around, Complete coverage, Lightweight and long wear, Available in 4 office-wear shades – Rose Ivory, Beige Vanilla, Beige Caramel and Rose Honey, Suitable for all skin types, Dermatologically tested. How to apply: Just take a small amount of product with the index finger and start applying it to the skin with your fingertips. Usually, you can just apply the mousse in four places: the forehead, nose, chin and cheekbones. Blend into your skin starting from the center of the skin outwards, taking care to cover your face including your neck.
                                </p>
                          </details>
                          <details>
                              <summary class="label font" >How To Apply</summary>
                              <p class="font detail" >Step 1: Take some mousse on your ring finger.
                                <br>
                                Step 2: Dab it onto your face – cheeks, under-eye, forehead, nose, chin and neck area.<br>
                                Step 3: Gently blend it into your skin, by moving in an upward direction.
                            </p>
                          </details>
                          <div class="container">
                              <img src="images/faceW2.jpg" alt="" srcset="" style="max-width: 100%;
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