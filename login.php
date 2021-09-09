<!DOCTYPE html>
<?php
    require_once("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="import" href="login.php">
    <link rel="import" href="signup.php">
    <link rel="import" href="cart.php">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lstyle.css">

    <title>Document</title>
</head>
<body>
    <div class="container">
    <div class="row">
        <div class="col-sm-4">   
            <?php
                if(isset($_POST['login']))
                {
                    extract($_POST);
                    $sql="select * from users where (username='$username' and email='$email');";
                    $res=mysqli_query($connection,$sql);

                    // for finding if any such row exists then no. of rows >=1 otherwise no
                    $nrow=mysqli_num_rows($res);
                    if($nrow==1)
                    {
                        $row=mysqli_fetch_assoc($res);
                        if(password_verify($password,$row['password']))
                        {
                            // this value can be 1 or any value to set this variable
                            $_SESSION["login_sess"]="1";
                            $_SESSION["login_email"]=$row['email'];
                            header("location:account.php");

                        }
                        else{
                            header("location:login.php?loginerror=".$username);
                        }
                    }
                    else{
                        header("location:login.php?loginerror=".$username);
                    }
                }
            ?>
        </div>
        <div class="col-sm-4">
            <div class="login_form">
                <?php
                    if(isset($_GET['loginerror']))
                    {
                        $loginerror=$_GET['loginerror'];
                    }
                    if(!empty($loginerror))
                    {
                        echo '<p class="logerror">Invalid Login Credentials. Please Try Again..</p> ';
                    }
                ?>
                <form action="" method="POST">
                    <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label font">Username</label>
                            <input type="text" class="form-control font" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required="" value="<?php
                                if(!empty($loginerror))
                                {
                                    echo $loginerror;
                                }    ?>">
                            
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label font">Email </label>
                        <input type="email" class="form-control font" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" >
                        <div id="emailHelp" class="form-text font">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label font">Password</label>
                        <input type="password" class="form-control font" id="exampleInputPassword1" name="password">
                    </div>
                    <!-- <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->
                    
                    <p>
                        <button type="submit" class="btn btn-primary font" name="login">Login</button>
                        &nbsp &nbsp
                        <a href="homepage.php" > 
                            <span style="font-size: 2em; color: Dodgerblue;
                            ">
                            <i class="fas fa-home"></i>
                            </span>
                        </a>
                    </p>
                </form>
                <p class="font">
                <label for="exampleInputPassword1" class="form-label font">Don't have account?</label>
                <a href="signup.php">Register Now</a>
                </p>
            </div>
        </div>
        <div class="col-sm-4"></div>
    </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>