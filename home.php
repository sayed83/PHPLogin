<?php
    session_start();
    if(!isset($_SESSION['username']))
    header('location:login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h2, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.css">
    <title>Document</title>
</head>
<body>
    <div class="container">    
        <h2 class="text-center text-success">Welcome <?php echo $_SESSION['username']; ?></h2>
        <a href="logout.php">Logout</a>
    </div>   
</body>
</html>