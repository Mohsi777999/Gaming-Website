<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body style="display:flex; justify-content:center; align-items:center; width:100%; height:90vh;">

    <div id="form">
        <h1 id="heading">SIGNUP HERE</h1><br>
        <form name="form" method="POST">
            <i class="fa fa-user fa-lg"></i>
            <input type="username" id="user" name="user" placeholder="Enter Username" required></br></br>
            <i class="fa-solid fa-envelope fa-lg"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="submit" id="btn" value="SignUp" name="submit" />
            <p class="mt-3 mx-1">Already have an account? <a class="text-decoration-none" href="./login-user.php">Login</a></p>
        </form>
    </div>

    <!-- PHP Part  -->

    <?php
    if (isset($_POST['submit'])) {
        session_start();
        $username = mysqli_real_escape_string($conn, $_POST['user']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);
        $password = mysqli_real_escape_string($conn, $_POST['pass']);

        $sql = "Select * from user where username='$username'";
        $result = mysqli_query($conn, $sql);
        $count_user = mysqli_num_rows($result);

        $sql2 = "Select * from user where email='$email'";
        $result2 = mysqli_query($conn, $sql2);
        $count_email = mysqli_num_rows($result2);

        if ($count_user == 0 && $count_email == 0) {
            $stmt = $conn->prepare("INSERT INTO user (username, email, password) VALUES (?, ?, ?)");
            $stmt->bind_param("sss", $username, $email, $password);
            $stmt->execute();
            header('Location: login-user.php');
        } else {
            if ($count_user > 0) {
                echo '<script>
                        alert("Username already exists!!")
                    </script>';
            }
            if ($count_email > 0) {
                echo '<script>
                        alert("Email already exists!!")
                    </script>';
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