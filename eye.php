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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- Custom CSS file -->
    <!-- <link rel="stylesheet" href="style.css"> -->
    <script src="index.php"></script>
    <link rel="stylesheet" href="pstyle.css">
    <title>Hello, world!</title>
</head>
<body>
  <header>
  <?php
        include 'header2.php';
    ?>
</header>
    <section class="product"> 
      <div class="container">
        <div class="row">
            <div class="col">
              <a href="eye1.php">
                <div class="card">
                    <img src="images/eye1.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">COLOSSAL BOLD LINER
                          BLACK</h5>
                        <p class="card-text">
                          
                          <span>₹ 243</span>
                        </p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="eye2.php">
                <div class="card">
                    <img src="images/eye2.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Maybelline Lasting Drama Gel Eyeliner</h5>
                        <p class="card-text">₹ 370</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="eye3.php">
                <div class="card">
                    <img src="images/eye3.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Lakmé Shine Eye Liner, Sparkling Olive</h5>
                        <p class="card-text">₹ 343</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
        </div>
    </div>  
    <br>
      <div class="container">
        <div class="row">
            <div class="col">
              <a href="eye4.php">
                <div class="card">
                    <img src="images/eye4.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Colorbar Waterproof Liquid Eyeliner</h5>
                        <p class="card-text">₹ 335</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="eye5.php">
                <div class="card">
                    <img src="images/eye5.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Colorbar All Matte Eyeliner, Black</h5>
                        <p class="card-text">₹ 560</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="eye6.php">
                <div class="card">
                    <img src="images/eye6.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">Colorbar Ultimate Eye Liner, Black</h5>
                        <p class="card-text">₹424</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
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