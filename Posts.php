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
    <title>Posts</title>
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
                    <a href="Dashboard.php" class="nav-link">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a href="Posts.php" class="nav-link">Posts</a>
                </li>
                <li class="nav-item">
                    <a href="Categories.php" class="nav-link">Categories</a>
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
                <div class="col-md-12 mb-1">
                    <h1><i class="fa-brands fa-blogger-b"></i> Blog Posts</h1>
                </div>
                <div class="col-lg-3">
                    <a href="AddNewPost.php" class="btn btn-primary mb-1">
                    <i class="fa-solid fa-pen-to-square"></i> Add New Post
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="Categories.php" class="btn btn-info mb-1">
                    <i class="fa-solid fa-folder-plus"></i> Add New Category
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="Admins.php" class="btn btn-warning mb-1">
                    <i class="fa-solid fa-user-plus"></i> Add New Admin
                    </a>
                </div>
                <div class="col-lg-3">
                    <a href="Comments.php" class="btn btn-success mb-1">
                    <i class="fa-solid fa-check"></i> Approve Comments
                    </a>
                </div>
            </div>
        </div>
    </header>
    
    <section class="container py-2 mb-4">
        <div class="row">
        <?php echo ErrorMessage(); echo SuccessMessage(); ?>
            <div class="col-lg-12">
                <table class="table table-striped table-hover">
                    <thead class="table-dark">
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Date&Time</th>
                        <th>Author</th>
                        <th>Comments</th>
                        <th>Action</th>
                        <th>Live Preview</th>
                    </tr>
                    </thead>
                    <?php
                    global $ConnectingDB;
                    $sql = "SELECT * FROM posts";
                    $stmt = $ConnectingDB->query($sql);
                    $SerialNumber = 0;
                    while ($DataRows = $stmt->fetch()){
                        $Id = $DataRows["id"];
                        $DateTime = $DataRows["datetime"];
                        $PostTitle = $DataRows["title"];
                        $Category = $DataRows["category"];
                        $Admin = $DataRows["author"];
                        $PostText = $DataRows["post"];
                        $SerialNumber++;
                    ?>
                    <tbody>
                    <tr>
                        <td><?php echo $SerialNumber ?></td>
                        <td><?php if(strlen($PostTitle)>20){
                            $PostTitle = substr($PostTitle,0,18)."..";
                        }
                        echo $PostTitle; ?></td>
                        <td><?php echo $Category; ?></td>
                        <td><?php echo $DateTime; ?></td>
                        <td><?php echo $Admin; ?></td>
                        <td>Comments</td>
                        <td><a href="DeletePost.php?id=<?php echo $Id; ?>"><span class="btn btn-danger btn-sm">Delete</span></a></td>
                        <td><a href="FullPost.php?id=<?php echo $Id ?>" target="_blank"><span class="btn btn-primary btn-sm">Go To Post</span></a></td>
                    </tr>
                    </tbody>
                    <?php } ?>
                </table>
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