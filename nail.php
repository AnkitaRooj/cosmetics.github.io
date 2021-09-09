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
              <a href="nail1.php">
                <div class="card">
                    <img src="images/nail1.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">Lakmé Color Crush Nailart, M5 Burgundy, 6 ml</h5>
                        <p class="card-text">
                          
                          <span>₹ 152</span>
                        </p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="nail2.php">
                <div class="card">
                    <img src="images/nail2.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">Lakmé 9 to 5 Primer + Gloss Nail Colour, Ruby Rush, 6 ml</h5>
                        <p class="card-text">₹ 179</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="nail3.php">
                <div class="card">
                    <img src="images/nail3.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">LAKMÉ Absolute Gel Stylist Nail Color, Vineyard, 12ml</h5>
                        <p class="card-text">₹ 248</p>
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
              <a href="nail4.php">
                <div class="card">
                    <img src="images/nail4.jpg" alt="" class="card-img-top" style="width: 120px;
                    height: 120px;
                    height: auto; padding: 3px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 30px;
                    ">
                    
                    <div class="card-body">
                        <h5 class="card-title">Maybelline New York Color Show Nail Lacquer</h5>
                        <p class="card-text">₹ 235</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="nail5.php">
                <div class="card">
                    <img src="images/nail5.jpg" alt="" class="card-img-top" style="width: 120px;
                    height: 120px;
                    height: auto; padding: 3px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 30px;">
                    
                    <div class="card-body">
                        <h5 class="card-title">Maybelline Color Show Nail Enamel, Denim dash</h5>
                        <p class="card-text">₹ 160</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="nail6.php">
                <div class="card">
                    <img src="images/nail6.jpg" alt="" class="card-img-top" style="width: 120px;
                    height: 120px;
                    height: auto; padding: 3px;
                    margin-left: auto;
                    margin-right: auto;
                    margin-top: 30px;"
                    >
                   
                    <div class="card-body">
                        <h5 class="card-title">
                          
                          Maybelline Color Show Nail Enamel, Berry Sexy</h5>
                        <p class="card-text">₹224</p>
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