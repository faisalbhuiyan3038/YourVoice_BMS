<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");

    if(isset($_POST["Submit"])){
        $Name = $_POST["FullName"];
        $Number = $_POST["PhoneNumber"];
        $Message = nl2br($_POST["Message"],true);
        $Email = $_POST["Email"];

            if(empty($Name) || empty($Number) || empty($Message) || empty($Email)){
                $_SESSION["ErrorMessage"]= "Pleas Fill Out All Fields!";
                Redirect_to("ContactUs.php");
            }
            elseif((strlen($Number)!=11)){
                $_SESSION["ErrorMessage"]= "Phone Number should be 11 characters only!";
                Redirect_to("ContactUs.php");
            }
            elseif(strlen($Message)>999){
                $_SESSION["ErrorMessage"]= "Message Should Be Less Than 1000 Characters";
                Redirect_to("ContactUs.php");
            }
            else{
                $sql = "INSERT INTO contactus(name,number,email,message)";
                $sql .= "VALUES(:namE,:numbeR,:emaiL,:messagE)";
                $stmt = $ConnectingDB->prepare($sql);
                $stmt->bindValue(':namE',$Name);
                $stmt->bindValue(':numbeR',$Number);
                $stmt->bindValue(':emaiL',$Email);
                $stmt->bindValue(':messagE',$Message);
                
                $Execute=$stmt->execute();

                if($Execute){
                    $_SESSION["SuccessMessage"] = "Message Sent Successfully";
                    Redirect_to("ContactUs.php");
                }
                else{
                    $_SESSION["ErrorMessage"] = "Something went wrong, Try again!";
                    Redirect_to("ContactUs.php");
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
    <title>Contact Us</title>
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
                    <h1><i class="fa-solid fa-envelope"></i> Contact Us</h1>
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
                <form class="" action="ContactUs.php" method="post">
                    <div class="card bg-secondary text-light mb-3">
                        

                    <div class="card-body bg-dark">
                        <div class="form-group">
                            <label for="name"><div class="FieldInfo mb-1"> Full Name: </div></label>
                            <input class="form-control" type="text" name="FullName" id="name" placeholder="Type Name Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="number"><div class="FieldInfo mb-1"> Phone Number: </div></label>
                            <input class="form-control" type="text" name="PhoneNumber" id="number" placeholder="Type Number Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email"><div class="FieldInfo mb-1"> Email: </div></label>
                            <input class="form-control" type="email" name="Email" id="email" placeholder="Type Email Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="message"><div class="FieldInfo mb-1"> Message: </div></label>
                            <textarea class="form-control" id="message" name="Message" rows="8" cols="80"></textarea>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-lg-6 mb-2">
                            <a href="Blog.php" class="btn btn-warning w-100"><i class="fa-solid fa-arrow-left"></i> Back To Blog Page</a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="Submit" class="btn btn-success w-100"><i class="fa-solid fa-check"></i> Send Message</button>
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