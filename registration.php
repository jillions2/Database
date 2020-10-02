<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/style2.css" />
</head>
</head>

<body>
    <div>
        <?php
        require('db.php');
        //if form submitter, insert values into the database
    if(isset($_REQUEST['username'])){
        //removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escape special charecters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $eamil = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $trn_date = date("Y-m-d H:i:s");

        $query ="INSERT INTO users (username, password, email, trn_date)
                 VALUES ('$username','".md5($password)."', '$email','$trn_date')";
        $result = mysqli_query($con,$query);

        if($result){
            echo "<div class='form'>
            <h3> You are registered successfully</h3>
            <br> Click here to <a href='login.php'>Login</a>
            </div>";
        }
            
      
    }else{  
     
?>
    </div>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ffc5ce;">
        <div class="container">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Menu</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php if(isset($_SESSION['username'])) { ?>
                    <li class="nav-item dropdown">
                        <button class="btn btn-light dropdown-toggle" type="button" id="dropdownMenuButton"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                            style='font-size:15px;color:black'>
                            Welcome, <?php echo $_SESSION['username']; ?>
                            <i class="fas fa-user-circle"></i>
                        </button>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="login.php">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="logout.php">Logout</a>
                        </div>
                    </li>
                    <?php } else {?>
                    <li class="nav-item">
                        <a class="nav-link fas fa-user-circle " href="login.php" style='font-size:36px;color:white'></a>

                    </li>
                    <?php } ?>
                </ul>

            </div>
        </div>
    </nav>
    </div>

    <div>
        <form name="registration" action="" method="post">
            <div class="container">

                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-5">
                        <br>
                        <h2>Create An Account</h2>
                        <label for="username"><b>UserName</b></label><br>
                        <input type="text" name="username" placeholder="Username" class="form-control" required><br>

                        <label for="email"><b>Email</b></label><br>
                        <input type="text" name="email" placeholder="Email" class="form-control" required><br>

                        <label for="password"><b>Password</b></label><br>
                        <input type="text" name="password" placeholder="Password" class="form-control" required><br>
                        <hr class="mb-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6"> <p> Have an account alreay?  <a href="login.php"> Sign In</a></div>
                                <div class="col-md-6">

                                    <div>
                                   
                                        <input class="btn btn-outline-danger" type="submit" name="create" value="Summit"
                                            align="right" style="width:80%;">
                                        
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</body>

</html>