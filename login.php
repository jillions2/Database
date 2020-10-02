<!DOCTYPE html>
<html lang="en">

<head>
    <title>User login</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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






    <nav class="site-header sticky-top py-1" style="background-color: #e3f2fd;">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="login.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
          
           
            <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        </div>
    </nav>
    <nav class="site-header sticky-top py-1">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="#" aria-label="Product"> </a>
            <a class="py-2 d-none d-md-inline-block" href="#">Shirts</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Trousers</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Dresses</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Skirts</a>
            <a class="py-2 d-none d-md-inline-block" href="#">Jeans</a>
            <a class="py-2" href="#" aria-label="Product"> </a>
            
        </div>
    </nav>
    <div align="center">
        <img src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" alt="..." width="70" height="70"
            align="center">
    </div>
    <div>
        <form action="" method="post" name="login">
            <div class="container">

                <div class="row">
                <div class="col-md-4"></div>
                    <div class="col-md-4">
                        <h2>Log in to Twitter</h2>
                        <label for="username"><b>UserName</b></label><br>
                        <input type="text" name="username" required><br>



                        <label for="password" align="left"><b>Password</b></label><br>
                        <input type="password" name="password" required>
                        <hr class="mb-3">
                        <div align="center">
                            <input class="btn btn-primary" type="submit" name="dologin" value="Log in">
                            <br>
                            <p> Not registered yet? <a href="registration.php"> Register here</a>
                        </div>

                    </div>
                    
                </div>
            </div>
        </form>
    </div>

    <?php } ?>
</body>

</html>