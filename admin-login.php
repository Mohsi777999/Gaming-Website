<?php include ("config.php");
session_start();
if (isset($_SESSION['g_admin']) or !empty(isset($_SESSION['g_admin']))) {
    header("Location:admin.php");
}
?>
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
        <h1 id="heading">ADMIN LOGIN HERE</h1><br>
        <form name="form" method="POST">
            <i class="fa fa-user fa-lg"></i>
            <input type="username" id="user" name="aduser" placeholder="Enter Admin Username" required></br></br>
            <i class="fa-solid fa-envelope fa-lg"></i>
            <input type="password" id="email" name="adpass" placeholder="Enter Admin Password" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="submit" id="btn" value="Login" name="adsubmit" />
            <p class="mt-3 mx-1">Are you an admin? If so, please log in to access the dashboard.</p>
        </form>
    </div>

    <!-- PHP Part  -->

    <?php
    if (isset($_POST['adsubmit'])) {
        $aduser = mysqli_real_escape_string($conn, $_POST['aduser']);
        $adpass = mysqli_real_escape_string($conn, $_POST['adpass']);

        $adlogin = "SELECT * FROM `admin` WHERE `admin_username` = '$aduser' AND `admin_pass` = '$adpass'";
        $result = mysqli_query($conn, $adlogin);

        if ($result) {
            $row_count = mysqli_num_rows($result);
            if ($row_count > 0) {
                $_SESSION['g_admin'] = $aduser;
                header("Location:admin.php");
            } else {
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