<?php
    include('auth.php');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
 
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />


    <title>Welcome Home</title>
</head>

<body>

<nav class="site-header sticky-top py-1" style="background-color: #e3f2fd;">
        <div class="container d-flex flex-column flex-md-row justify-content-between">
            <a class="py-2" href="login.php" aria-label="Product">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="d-block mx-auto" role="img" viewBox="0 0 24 24" focusable="false"><title>Product</title><circle cx="12" cy="12" r="10"/><path d="M14.31 8l5.74 9.94M9.69 8h11.48M7.38 12l5.74-9.94M9.69 16L3.95 6.06M14.31 16H2.83m13.79-4l-5.74 9.94"/></svg>
            </a>
          
           
            <a class="py-2 d-none d-md-inline-block" href="#">Cart</a>
        </div>
    </nav>
    <div class="form">
        <p>Welcome <?php echo $_SESSION['username']; ?>!</p>
        <p>This is homepage and secure area.</p>
        <p><a  href="dashboard.php">Dashboard</a></p>
        <a  href="login.php">Logout</a>
    </div>
    
</body>

</html>