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
              <a href="hair1.php">
                <div class="card">
                    <img src="images/hair1.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Total Repair 5 Restoring Conditioner with Keratin XS</h5>
                        <p class="card-text">
                          
                          <span>₹ 139</span>
                        </p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="hair2.php">
                <div class="card">
                    <img src="images/hair2.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Dream Lengths <br> Conditioner</h5>
                        <p class="card-text">₹ 167</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="hair3.php">
                <div class="card">
                    <img src="images/hair3.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Fall Resist 3X Anti-Hairfall Conditioner</h5>
                        <p class="card-text">₹ 149</p>
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
              <a href="hair4.php">
                <div class="card">
                    <img src="images/hair4.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Extraordinary Clay Conditioner</h5>
                        <p class="card-text">₹ 159</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="hair5.php">
                <div class="card">
                    <img src="images/hair5.jpg" alt="" class="card-img-top">
                    
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris 6 Oil Nourish <br> Conditioner</h5>
                        <p class="card-text">₹ 149</p>
                        <button class="btn btn-warning">Add to Cart</button>
                    </div>
                </div>
              </a>
            </div>
            <div class="col">
              <a href="hair6.php">
                <div class="card">
                    <img src="images/hair6.jpg" alt="" class="card-img-top">
                   
                    <div class="card-body">
                        <h5 class="card-title">L'Oreal Paris Rapid Reviver 6 Oil Nourish Deep Conditioner</h5>
                        <p class="card-text">₹ 192</p>
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