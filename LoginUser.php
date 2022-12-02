<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/d300452dcf.js" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet">
    <title>Login Page</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">YOURVOICE.COM</a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarcollapseBMS">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarcollapseBMS">
            
            </div>
        </div>
    </nav>
    
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
        </div>
    </header>

    <section class="container py-2 mb-4">
        <div class="row">
            <div class="offset-sm-3 col-sm-6" style="min-height:400px">
                <div class="card bg-secondary text-light">
                    <div class="card-header">
                        
                        <h4>Welcome Back!</h4>
                        </div>
                        <div class="card-body bg-dark">
                        
                        <form class="" action="LoginUser.php" method="post">
                            <div class="form-group">
                                <label for="Name"><span class="FieldInfo">Name:</span></label>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="text" name="Name" id="Name" value="">
                                </div>
                            </div>
                        </form>
                        <form class="" action="LoginUser.php" method="post">
                            <div class="form-group">
                                <label for="Password"><span class="FieldInfo">Password:</span></label>
                                <div class="input-group mb-3">
                                    <input class="form-control" type="password" name="Password" id="Password" value="">
                                </div>
                            </div>
                            <input type="submit" name="Submit" class="btn btn-info w-100" value="Login">
                        </form>
                        
                        
                    </div>
                </div>
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