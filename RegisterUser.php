<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");

    if(isset($_POST["Submit"])){
        $Name = $_POST["Name"];
        $Password = $_POST["Password"];
        $ConfirmPassword = $_POST["ConfirmPassword"];

            if($Password!=$ConfirmPassword){
                $_SESSION["ErrorMessage"]= "Passwords do not match!";
                Redirect_to("RegisterUser.php");
            }
            elseif(empty($Password) || empty($Name) || empty($ConfirmPassword)){
                $_SESSION["ErrorMessage"]= "Please Fill Out All Fields";
                Redirect_to("RegisterUser.php");
            }
            else{
                $sql = "INSERT INTO users(name,password)";
                $sql .= "VALUES(:Name,:Password)";
                $stmt = $ConnectingDB->prepare($sql);
                $stmt->bindValue(':Name',$Name);
                $stmt->bindValue(':Password',$Password);
                $Execute=$stmt->execute();

                if($Execute){
                    $_SESSION["SuccessMessage"] = "User Registered Successfully";
                    Redirect_to("RegisterUser.php");
                }
                else{
                    $_SESSION["ErrorMessage"] = "Something went wrong, Try again!";
                    Redirect_to("RegisterUser.php");
                }
            }
    }

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d300452dcf.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>Register User Page</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">YOURVOICE.COM</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseBMS">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapseBMS">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="Blog.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="RegisterUser.php" class="nav-link">Register User</a>
                </li>
                <li class="nav-item">
                    <a href="LoginUser.php" class="nav-link">Login</a>
                </li>
                <li class="nav-item">
                    <a href="ContactUs.php" class="nav-link">Contact Us</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="Logout.php" class="nav-link text-danger"><i class="fa-solid fa-user-xmark"></i> Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>

    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1><i class="fa-solid fa-user-plus"></i> Register User</h1>
                </div>
            </div>
        </div>
    </header>

    <section class="container py-2 mb-4">
        <div class="row">
            <div class="offset-lg-1 col-lg-10" style="min-height:400px;">
            <?php
            echo ErrorMessage();
            echo SuccessMessage();
            ?>
                <form class="" action="RegisterUser.php" method="post">
                    <div class="card bg-secondary text-light mb-3">
                        <div class="card-header">
                            <h1>Add New User</h1>
                        </div>

                    <div class="card-body bg-dark">
                        <div class="form-group">
                            <label for="title"><div class="FieldInfo mb-1"> Name: </div></label>
                            <input class="form-control" type="text" name="Name" id="Name" placeholder="Type Name Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title"><div class="FieldInfo mb-1"> Password: </div></label>
                            <input class="form-control" type="password" name="Password" id="Password" placeholder="Type Password Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="title"><div class="FieldInfo mb-1"> Confirm Password: </div></label>
                            <input class="form-control" type="password" name="ConfirmPassword" id="ConfirmPassword" placeholder="Type Password Here Again"> 
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-lg-6 mb-2">
                            <a href="LoginUser.php" class="btn btn-warning w-100"><i class="fa-solid fa-arrow-left"></i> Back To Login</a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="Submit" class="btn btn-success w-100"><i class="fa-solid fa-check"></i> Register</button>
                        </div>
                        </div>

                    </div>
                    </div>

                </form>
            </div>

        </div>
    </section>
    
    <br>
    <footer class="bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col">
                    <p class="lead text-center">Website By YourVoice Technologies | 2022 &copy; ---All Rights Reserved. </p>
                </div>
            </div> 
        </div>
    </footer>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>