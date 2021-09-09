<!DOCTYPE html>
<?php
    require_once("config.php");
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lstyle.css">



    <title>Document</title>
</head>
<body>
<div class="container">
    <div class="row">
        
        <?php
        // 'register '- button name
        if(isset($_POST['register']))
        {
            // for value extraction
            extract($_POST);

            // validation
            if(strlen($fname)<3)
            {
                $error[]='please enter First Name of atleast 3 characters ';
            } 
            if(strlen($fname)>20)
            {
                $error[]='please enter First Name of at max  20 characters ';
            
            } 
            if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname))
            {
                $error[]='Invalid First Name. No use of digits or special characters allowed';
            }


            if(strlen($lname)<3)
            {
                $error[]='please enter Last Name of atleast 3 characters ';
            } 
            if(strlen($lname)>20)
            {
                $error[]='please enter Last Name of at max  20 characters ';
               
            } 
            if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname))
            {
                $error[]='Invalid Last Name. No use of digits or special characters allowed';
            }

            if(strlen($username)<3)
            {
                $error[]='please enter UserName of atleast 3 characters ';
            } 
            if(strlen($username)>50)
            {
                $error[]='please enter Last Name of at max  50 characters ';
            
            } 
            if(!preg_match("/^^[^0-9][a-z0-9]+([_-]?[a-z0-9])*$/", $username))
            {
                $error[]='Invalid User Name. 1st character shouldnot start with number. Enter lowercase letters without any space';
            }

            if(strlen($email)>50)
            {
                $error[]='email max length 50 characters';
            }

            if(strlen($password)<5 || strlen($password)>16)
            {
                $error[]='password length atleast 6 characters & at max 16 characters';
            }

            if($cpassword==' ')
            {
                $error[]='please confirm the password';
            }

            if($password != $cpassword)
            {
                $error[]='password not matching';
            }

            $sql="select * from users where (username='$username' or email='$email');";
            $res=mysqli_query($connection,$sql);
            if(mysqli_num_rows($res)>0)
            {
                $row=mysqli_fetch_assoc($res);
                if($username==$row['username'])
                {
                    $error[]='username already exist';
                }
                if($email==$row['email'])
                {
                    $error[]='email already exist';
                }
            }

            if(!isset($error))
            {
                $date=date('Y-m-d');
                $option=array("cost"=>4);
                $password=password_hash($password,PASSWORD_BCRYPT,$option);
                $insert="insert into users  (fname,lname,username,email,password,date) values ('$fname', '$lname', '$username', '$email','$password', '$date');";
                $result=mysqli_query($connection,$insert);
                if($result)
                {
                    $done=2;
                }
                else{
                    $error[]='Failed, Something went wrong';
                }
            }
        }
        ?>

        <div class="col-sm-4">   
            <?php
                if(isset($error))
                {
                    foreach($error as $error)
                    {
                        echo  '<p class="error">&#x26A0; '.$error.'</p>';
                    }
                }
            ?>
         </div>
        <div class="col-sm-4">
            <div class="signup_form">
                <form action="" method="POST">
                <div class="mb-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="form-label font">First Name </label>
                        <input type="text" class="form-control font"  name="fname" required="" value="<?php
                            if(isset($error))
                            {
                                echo $fname;
                            }    ?>">
                        
                        <label for="exampleInputEmail1" class="form-label font">Last Name </label>
                        <input type="text" class="form-control font"  name="lname" required="" value="<?php
                            if(isset($error))
                            {
                                echo $lname;
                            }    ?>">
                    </div>
                        
                </div>
                <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label font">Username</label>
                        <input type="text" class="form-control font" id="exampleInputEmail1" aria-describedby="emailHelp" name="username" required="" value="<?php
                            if(isset($error))
                            {
                                echo $username;
                            }    ?>">
                        
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label font">Email </label>
                        <input type="email" class="form-control font" id="exampleInputEmail1" aria-describedby="emailHelp" name="email" required="" value="<?php
                            if(isset($error))
                            {
                                echo $email;
                            }    ?>">
                        <div id="emailHelp" class="form-text font">We'll never share your email with anyone else.</div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label font">Password</label>
                        <input type="password" class="form-control font" id="exampleInputPassword1" name="password" required="">

                        <label for="exampleInputPassword1" class="form-label font">Confirm Password</label>
                        <input type="password" class="form-control font" id="exampleInputPassword1" name="cpassword" required="">
                    </div>
                 
                    
                    <p>
                        <button type="submit" class="btn btn-primary font" name="register">Register</button>
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
                <label for="exampleInputPassword1" class="form-label font">Already have account?</label>
                <a href="login.php">Login</a>
                </p>
            </div>
        </div>
        <div class="col-sm-4">
                <?php
                    if(isset($done)){
                ?>
                <div class="success">
                    <span>&#9989;</span>
                    <label for="exampleInputPassword1" class="form-label font">You have successfully registered</label>
                    <br>
                    <a href="login.php">Login Here...</a>
                </div>
                <?php }else{?>
                    <div class="success">
                        <label for="exampleInputPassword1" class="form-label font">Register Now</label>
                    </div>
                <?php }?>
        </div>
    </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-eMNCOe7tC1doHpGoWe/6oMVemdAVTMs2xqW4mwXrXsW0L84Iytr2wi5v2QjrP/xp" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.min.js" integrity="sha384-cn7l7gDp0eyniUwwAZgrzD06kc/tftFf19TOAs2zVinnD/C7E91j9yyk5//jjpt/" crossorigin="anonymous"></script>
</body>
</html>