<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./whiteform.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body style="display:flex; justify-content:center; align-items:center; width:100%; height:90vh;">

    <div class="main adminform">
        <div class="content">
            <form method="POST">
                <h2>LOGIN HERE</h2>
                <label for="email">Enter Email Address</label>
                <input type="email" placeholder="Email Address" name="uemail" required>

                <label for="password">Enter Password</label>
                <input type="password" placeholder="Password" name="upass" required>

                <button class="button" type="submit" name="login" required>Login</button>
                <p class="mx-1">Don't have an account? <a class="text-decoration-none" href="./user.php">Signup</a></p>
            </form>
        </div>
    </div>

    <!-- PHP Part  -->

    <?php

    if (isset($_POST['login'])) {
        $umail = $_POST['uemail'];
        $upass = $_POST['upass'];

        $sqllogin = "SELECT * FROM `user` WHERE `email` = '$umail' AND `password` = '$upass'";
        $result = mysqli_query($conn, $sqllogin);

        if ($result) {
            session_start();
            $row_count = mysqli_num_rows($result);
            if ($row_count > 0) {
                $_SESSION['g_email'] = $umail;
                header("Location:games.php");
            } 
            else {
                echo "<script>alert('Incorrect Email Or Password')</script>";
            }
        }
    }
    ?>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="./script.js"></script>
</body>

</html>