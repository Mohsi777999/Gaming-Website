<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            height: 90vh;
        }
    </style>
</head>

<body>

    <form method="POST">
        <input type="username" name="username" placeholder="username"> <br>
        <input type="password" name="userpass" placeholder="user password"> <br>
        <input type="number" name="age" placeholder="age"> <br>
        <textarea name="blog" cols="30" rows="10" placeholder="Write your blog"></textarea> <br>
        <button type="submit" name="submitform">Submit</button>
    </form>


    <div class="data">
        <?php
        session_start();
        if (isset($_POST['submitform'])) {
            $username = $_POST['username'];
            $userpass = $_POST['userpass'];
            $age = $_POST['age'];
            $blog = $_POST['blog'];

            $sql = "INSERT INTO `user`(`username`, `userpass`, `age`, `blog`) VALUES ('$username','$userpass','$age','$blog')";
            $result = mysqli_query($conn, $sql);

            if (isset($_SESSION['username'])) {
                $_SESSION['username'] = $usname;
                echo "$usname";
            } else {
                echo "Error message: " . mysqli_error($conn);
            }
        }
        ?>
    </div>

</body>

</html>