<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>login rps</title>
</head>
<body class="body">  

  <style>
    .body { 
    padding: 4cm;
    background: rgb(2,0,36);
    background: linear-gradient(90deg, rgba(2,0,36,1) 12%, rgba(4,2,46,1) 29%, rgba(6,5,62,1) 47%, rgba(9,9,78,0.8939950980392157) 67%, rgba(9,24,91,1) 84%, rgba(8,40,105,1) 100%, rgba(0,212,255,1) 100%);
}
.back-login {
    padding-top: 20px;
    background-color: darkcyan;
    border-radius: 20px;
    width: 510px;
    height: 620px;
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



    </style>
    <div class="back-login">
        <div class="d-flex justify-content-center">
            <img class="logo-login" src="Amikom2.png">
        </div>
        <h1 class="perintah-login">
            Silahkan Buat Akun dengan Email dan Password Amikom Anda
        </h1>
        <form class="form" action="controller_register.php" method="POST">
        <div class="mb-6">
                <label for="username" class="block text-gray-600 text-sm font-medium mb-2">Username</label>
                </br>
                <input type="username" id="username" name="username" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="username" required>
            </div>
            <div class="mb-6">
                <label for="nim" class="block text-gray-600 text-sm font-medium mb-2">NIM</label>
                </br>
                <input type="nim" id="nim" name="nim" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="nim" required>
            </div>
        <div class="mb-4">
                <label for="email" class="block text-gray-600 text-sm font-medium mb-2">Email</label>
</br>
                <input type="text" id="email" name="email" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="email" required>
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-600 text-sm font-medium mb-2">Password</label>
                </br>
                <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md focus:ring-2 focus:ring-blue-400 focus:outline-none" placeholder="Password" required>
            </div>
</br>
            <div class="mb-4">
                <a href="register.php">
                <button type="register" name="action" value="register" class="w-full bg-blue-500 text-black py-2 rounded-md hover:bg-blue-600 transition duration-300">Register</button>
        </a>
            </div>
</form>

    </div>
</body>
</html>