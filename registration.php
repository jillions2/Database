<!DOCTYPE html>
<html lang="en">

<head>
    <title>User Registration</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/style2.css" />
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
    <nav class="site-header sticky-top py-1" style="background-color: #e3f2fd;">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="login.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
          
           
            <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        </div>
    </nav>
    <div align="center">
        <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="..." width="70" height="70"
            align="center">
    </div>

    <div>
        <form name ="registration"action="" method="post">
            <div class="container">

                <div class="row">
                <div class="col-md-3"></div>
                    <div class="col-md-5">
                        <h2>Create your account</h2>
                        <label for="username"><b>UserName</b></label><br>
                        <input  type="text" name="username" placeholder="Username" required><br>

                        <label for="email"><b>Email</b></label><br>
                        <input type="text" name="email"placeholder="Email" required><br>

                        <label for="password"><b>Password</b></label><br>
                        <input  type="text" name="password" placeholder="Password"required><br>
                        <hr class="mb-3">
                        
                        <div align="center">
                        <input class="btn btn-primary" type="submit" name="create" value="Sign Up">
                        <br> <p> Click Here To Login <a href="login.php"> Login here</a>
                        </div>
                        
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php } ?>
</body>

</html>