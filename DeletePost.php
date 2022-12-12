<?php
require_once("includes/DB.php");
require_once("includes/Functions.php");
require_once("includes/Sessions.php");

if($_SESSION['UserID']==null){
    $_SESSION["ErrorMessage"] = "You are not logged in!";
    Redirect_to("LoginUser.php");
}
else if($_SESSION['UserID']!=1){
    $_SESSION["ErrorMessage"] = "You are not allowed to access this page..";
    Redirect_to("Blog.php");
}

$SearchQueryParameter = $_GET['id'];
    if(isset($_POST["Submit"])){
                global $ConnectingDB;
                $sql = "DELETE FROM posts WHERE id='$SearchQueryParameter'";
                $Execute=$ConnectingDB->query($sql);

                if($Execute){
                    $_SESSION["SuccessMessage"] = "Post Deleted Successfully";
                    Redirect_to("Posts.php");
                }
                else{
                    $_SESSION["ErrorMessage"] = "Something went wrong, Try again!";
                    Redirect_to("Posts.php");
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
    <title>Delete Post</title>
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
                    <a href="MyProfile.php" class="nav-link"><i class="fa-solid fa-user text-success"></i> My Profile</a>
                </li>
                <li class="nav-item">
                    <a href="Posts.php" class="nav-link">Posts</a>
                </li>
                <li class="nav-item">
                    <a href="Categories.php" class="nav-link">Categories</a>
                </li>
                <li class="nav-item">
                    <a href="Admins.php" class="nav-link">Manage Admins</a>
                </li>
                <li class="nav-item">
                    <a href="Comments.php" class="nav-link">Comments</a>
                </li>
                <li class="nav-item">
                    <a href="Blog.php?page=1" class="nav-link">Read All Blogs</a>
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
                    <h1><i class="fa-solid fa-pen-to-square"></i> Delete Post</h1>
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

            global $ConnectingDB;
            $SearchQueryParameter = $_GET["id"];
            $sql = "SELECT * FROM posts WHERE id='$SearchQueryParameter'";
            $stmt = $ConnectingDB->query($sql);
            while($DataRows=$stmt->fetch()){
                $TitleToBeDeleted = $DataRows['title'];
                $CategoryToBeDeleted = $DataRows['category'];
                $PostToBeDeleted = $DataRows['post'];
            }
            ?>
                <form class="" action="DeletePost.php?id=<?php echo $SearchQueryParameter; ?>" method="post">
                    <div class="card bg-secondary text-light mb-3">
                        

                    <div class="card-body bg-dark">
                        <div class="form-group">
                            <label for="title"><div class="FieldInfo mb-1"> Post Title: </div></label>
                            <input disabled class="form-control" type="text" name="PostTitle" id="title" value="<?php echo $TitleToBeDeleted; ?>" placeholder="Type Title Here"> 
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="CategoryTitle"><div class="FieldInfo mb-1"> Category: </div></label>
                            <input disabled class="form-control" type="text" id="CategoryTitle" value="<?php echo $CategoryToBeDeleted; ?>" name="Category"></input>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="Post"><div class="FieldInfo mb-1"> Post: </div></label>
                            <textarea disabled class="form-control" id="Post" name="PostDescription" rows="8" cols="80"><?php echo $PostToBeDeleted; ?></textarea>
                        </div>
                        <br>
                        <div class="row">
                        <div class="col-lg-6 mb-2">
                            <a href="Posts.php" class="btn btn-warning w-100"><i class="fa-solid fa-arrow-left"></i> Back To Posts</a>
                        </div>
                        <div class="col-lg-6">
                            <button type="submit" name="Submit" class="btn btn-danger w-100"><i class="fa-solid fa-trash"></i> Delete</button>
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