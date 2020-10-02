<!DOCTYPE html>
<html lang="en">

<head>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/style2.css" />
</head>

<body>

    <div>
        <?php 
          require('db.php');
          session_start();
        if(isset($_POST['username'])){
            //removes backslashes
            $username = stripslashes($_REQUEST['username']);
            //escapea speacial characters in a string 
            $username = mysqli_real_escape_string($con,$username);
            $password = stripslashes($_REQUEST['password']);
            $password = mysqli_real_escape_string($con,$password);

            //checking is user existing in the database or not
            $query ="SELECT * FROM users WHERE username='$username' AND password='".md5($password)."'";
            $result = mysqli_query($con, $query) or die(mysql_error());
            $rows = mysqli_num_rows($result);
            
            if($rows ==1){
                $_SESSION['username'] =$username;//เก็บไว้เอาไปใช้ได้หลายๆหน้า
                $_SESSION['id'] =$id;
                //Redirect user to index.php
                header("Location: index.php");

            }else {
                echo"<div class='form'>
                    <h3>Username/Password is incorrect.</h3>
                    <br>Click here to <a href='login.php'>Login</a>
                </div>";
            }
            }else { //ถ้ามันยังไม่ได้ทำคำสั่งข้างบนก็คือให้มันทำคำสั่งข้างล่างก่อน

        
        
        ?>

    </div>
    <nav class="navbar navbar-expand-lg navbar-light"  style= "background-color: #ffc5ce;">
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
    <div>
        <div class="container ">
            <div class="row">
                <div class="col-md-6">
                    <br>
                    <h2>Sign In</h2>
                    <hr class="new" style="width:90%;text-align:left;margin-left:0; border: 2px solid black;">
                </div>
                <div class="col-md-6">
                    <br>
                    <h2>Create An Account</h2>
                    <hr class="new" style="width:90%;text-align:left;margin-left:0; border: 2px solid black;">
                </div>
            </div>
        </div>
    </div>

    <div>
        <form action="" method="post" name="login">
            <div class="container">

                <div class="row">

                    <div class="col-md-6">

                        <label for="username"><b>UserName</b></label><br>
                        <input type="text" class="form-control" name="username" style="width:60%;" required><br>



                        <label for="password" align="left"><b>Password</b></label><br>
                        <input type="password" class="form-control" name="password" style="width:60%;" required>
                        <hr class="mb-3" style="width:60%;" align="left">
                        <div>
                            <input class="btn btn-outline-danger " type="submit"
                                name="dologin" value="Log in">
                        </div>

                    </div>
                    <div class="col-md-6">

                        <label for="etc"><b>Register with LilY to enjoy<br>personalized services. including:</b><br>
                        <br>
                         - Online Order Status <br>
                         - Exclusive Emails <br>
                         - Save Shipping Addresses <br>
                         - Checkout Preferences <br><br>

                        </label>

                        
                        <div>
                        <a class="btn btn-outline-danger btn-lg " href="registration.php" role="button" style="width:60%;"> CREATE AN ACCOUNT</a>
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