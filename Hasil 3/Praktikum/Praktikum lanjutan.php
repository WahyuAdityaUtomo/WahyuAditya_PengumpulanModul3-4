<html>
    <head>
        <title> Masuk </title>
        <link rel="stylesheet" type="text/css" href="style.css">
        </head>
        <body>
            <?php
            $user = $_POST['username'];
            $pass = $_POST['password'];

            if($user == "Aditya" && $pass == "XRPL4"){
                echo "<h2>Login Success</h2>";
            }else{
                echo "<h2>Login Failed</h2>";
            }
            ?>

            <br>
            <a href="Praktikum.php"><button type="button" class="cancel">Kembali</button></a>
