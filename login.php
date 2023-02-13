<?php
// Start the session
    session_start();

    if(isset($_POST['submit'])){ // si formulaire soumis

        $username = $_POST["username"];
        $password = $_POST["password"];
        
        if(isset($_POST["username"]) && isset($_POST["password"])){
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;

            header("Location: welcome.php");
            
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>DailyChallenge</title>
</head>
<body>
    <main class="container">
        <h4 class="text-center mt-5"><?php echo "Veuillez entrer votre nom d'utilisateur et votre mot de passe."; ?></h4>
        <form action="" method="post">
            <article class="mb-3">
                Username
                <input type="text" class="form-control" name="username">
            </article>
            <article class="mb-3">
                Password
                <input type="password" class="form-control" name="password">
            </article>
            <button type="submit" class="btn btn-success" name="submit">Submit</button>
        </form>
    </main>
</body>
</html>