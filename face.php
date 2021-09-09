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
    <link rel="stylesheet" href="pstyle.css">
    <script src="index.php"></script>
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
              <a href="face1.php">
                <div class="card">
                    <img src="images/face1.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">Dewy Smooth Foundation</h5>
                        <p class="card-text">
                          
                          <span>₹ 583</span>
                        </p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="face2.php">
                <div class="card">
                    <img src="images/face2.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Lakmé 9 To 5 Mousse Foundation</h5>
                        <p class="card-text">₹ 403</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="face3.php">
                <div class="card">
                    <img src="images/face3.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Lakmé Absolute Skin Natural Mousse</h5>
                        <p class="card-text">₹ 578</p>
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
              <a href="face4.php">
                <div class="card">
                    <img src="images/face4.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Infallible 24H Fresh Wear Foundation</h5>
                        <p class="card-text">₹ 1200</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="face5.php">
                <div class="card">
                    <img src="images/face5.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Colorbar Amino Skin Radiant<br> Foundation</h5>
                        <p class="card-text">₹ 960</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="face6.php">
                <div class="card">
                    <img src="images/face6.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">Colorbar Flawless Full Cover <br>Concealer</h5>
                        <p class="card-text">₹ 623</p>
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