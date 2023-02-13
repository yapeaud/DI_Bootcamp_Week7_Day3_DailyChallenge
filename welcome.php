<?php
    session_start();

    $_SESSION['username'];  
    
    if(isset($_POST['del'])){
        session_destroy();
     }
?>     
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Welcome Page</title>
</head>
<body>
    <main class="container text-center">
        <h1 class="text-center mt-5"><?php echo "Welcome " .  $_SESSION['username'] . " !"; ?></h1>
        <button name="del" class="btn btn-danger text-center mt-3">Logout</button>
    </main>
</body>
</html>