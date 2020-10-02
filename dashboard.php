<?php 
require('db.php');
include('auth.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css2/style.css" />
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css" rel="stylesheet" />


    <title>Dashboard</title>
</head>

<body>

    <div class="form">
        <p>Dashboard </p>
        <p>This is Dashboard and secure area.</p>
        <p><a  href="index.php">Home</a></p>
        <a  href="login.php">Logout</a>
    </div>
    
</body>

</html>