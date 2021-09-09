<!DOCTYPE html>
<?php
    require_once("config.php");
    if(!isset($_SESSION["login_sess"]))
    {
        header("location:login.php");
    }
   
    $email=$_SESSION['login_email'];
    $sql="select * from users where email='$email';";
    $findRes=mysqli_query($connection,$sql);
    if($res=mysqli_fetch_array($findRes))
    {
        $username=$res['username'];
        $fname=$res['fname'];
        $lname=$res['lname'];
        $email=$res['email'];
    }
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
            <div class="col-sm-4"></div>
            <div class="col-sm-4"> 
                        <div class="success">
                            <h3><label for="formGroupExampleInput2" class="form-label font">Welcome ! 
                        <?php
                                echo $username;
                        ?>
                    </label></h3>
                            
                <table class="table table-hover font">
                    <tbody>
                        <tr>
                            <th>First Name</th>
                            <td><?php
                                echo $fname;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Last Name</th>
                            <td><?php
                                echo $lname;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php
                                echo $email;
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="formGroupExampleInput2" class="form-label font">Logout?</label></td>

                            <td><a href="logout.php">Click Here..</a>
                            </td>
                        </tr>
                    </tbody>
                </table>
        </div>
            
            </div>
            <div class="col-sm-4"></div>
        </div>
    </div>
</body>
</html>