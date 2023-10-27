<?php

session_start();
if(isset($_SESSION['err'])){
    $err_msg = $_SESSION['err'];
    unset($_SESSION['err']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login rps</title>
</head>
<body class="body">  

  <style>
    .body {
    /* background-image: url(bg.jpg); */
    padding: 4cm;
    background: rgb(2,0,36);
background: linear-gradient(90deg, rgba(2,0,36,1) 12%, rgba(4,2,46,1) 29%, rgba(6,5,62,1) 47%, rgba(9,9,78,0.8939950980392157) 67%, rgba(9,24,91,1) 84%, rgba(8,40,105,1) 100%, rgba(0,212,255,1) 100%);
}
.back-login {
    padding-top: 20px;
    background-color: darkcyan;
    border-radius: 20px;
    width: 510px;
    height: 540px;
    margin: 0 auto;
}

.form {
    padding-left: 15px;
    padding-right: 15px;
}

.logo-login {
    width: 100px;
}

.perintah-login {
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    text-align: center;
    font-size: 25px;
    padding: 10px;
}

.peringatan {
    background: red;
    text-align:center;
    border-radius: 5px;
}

    </style>
    <div class="back-login">
        <div class="d-flex justify-content-center">
            <img class="logo-login" src="Amikom2.png">
        </div>
        <h1 class="perintah-login">
            Silahkan login dengan Email dan Password Amikom Anda
        </h1>
        <form class="form" method="post" action="controller_login.php">
    <?php if (!empty($err_msg)): ?>
        <p class="peringatan"><?php echo $err_msg; ?></p>
    <?php endif; ?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address :</label>
        <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
        <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password :</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <input type="hidden" name="action" value="login">
    <input type="submit" value="Submit">
    <br>
    <br>
    <a href="register.php" ><p style="text-align: center; color: white;">Register</p></a>
</form>

    </div>
</body>
</html>