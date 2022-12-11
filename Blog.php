<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");
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
    <title>Blog Page</title>
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
                    <a href="LoginUser.php" class="nav-link"><i class="fa-solid fa-user text-success"></i> Login</a>
                </li>
                <li class="nav-item">
                    <a href="Posts.php" class="nav-link">Manage Posts</a>
                </li>
                <li class="nav-item">
                    <a href="RegisterUser.php" class="nav-link">Sign Up</a>
                </li>
                <li class="nav-item">
                    <a href="ContactMessages.php" class="nav-link">Messages</a>
                </li>
                <li class="nav-item">
                    <a href="ManageUsers.php" class="nav-link">Manage Users</a>
                </li>
                <li class="nav-item">
                    <a href="Blog.php" class="nav-link">Read All Blogs</a>
                </li>
                <li class="nav-item">
                    <a href="ContactUs.php" class="nav-link">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a href="AddNewPost.php" class="nav-link">New Post</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="LogOut.php" class="nav-link text-danger"><i class="fa-solid fa-user-xmark"></i> Log Out</a>
                </li>
            </ul>
            </div>
        </div>
    </nav>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-sm-11">
            <h1>See What's trending Below...</h1>
            <h1 class="lead">Sign Up to Write a Blog</h1>
            <br>
            <?php echo ErrorMessage(); echo SuccessMessage() ?>
            <?php
            global $ConnectingDB;
            $sql = "SELECT * FROM posts ORDER BY id desc";
            $stmt = $ConnectingDB->query($sql);
            while($DataRows = $stmt->fetch()){
                $PostId = $DataRows["id"];
                $DateTime = $DataRows["datetime"];
                $PostTitle = $DataRows["title"];
                $Category = $DataRows["category"];
                $Admin = $DataRows["author"];
                $PostDescription = $DataRows["post"];
            ?>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <?php echo $PostTitle; ?></h4>
                    </h4>
                    <small class="text-muted">Written by <?php echo $Admin; ?> On <?php echo $DateTime; ?></small>
                    <div style="float:right;" class="badge bg-primary">Comments 20</div>
                    <hr>
                    <p class="card-text"><?php if(strlen(strlen($PostDescription)>150)){
                        $PostDescription = substr($PostDescription,0,150)."..";
                    } echo $PostDescription ?></p>
                    <a href="FullPost.php?id=<?php echo $PostId; ?>" style="float:right;">
                    <span class="btn btn-info">Read More >> </span>
                    </a>
                </div>
                <?php } ?>
            </div>
            </div>
        </div>
    </div>
    
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