<?php
session_start();
if (!isset($_SESSION['g_admin'])) {
    header('Location: admin-login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <title>Dashboard</title>
    <link rel="stylesheet" href="./admin.css" />
    <!-- Boxicons CDN Link -->
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</head>

<body>
    <?php include ("config.php"); ?>
    <?php include ("sidebar.php"); ?>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
                <span class="dashboard">Dashboard</span>
            </div>
            <div class="search-box">
               <h1>&nbsp;&nbsp;&nbsp;&nbsp;Game never leave you</h1>
            </div>
            <div class="profile-details">
                <span class="admin_name px-5"><?php echo "Hello" . " " . $_SESSION['g_admin']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="container helparent">
                        <div class="text">
                            MESSAGES FROM USERS
                        </div>
                        <?php

                        $sqlms = "SELECT * FROM `help`";
                        $helpres = mysqli_query($conn, $sqlms);

                        while ($rowmsg = mysqli_fetch_array($helpres)) { ?>

                            <div class="container helpdiv">
                                <div class="help-data">
                                    <h5><?php echo $rowmsg['person_name']; ?></h5>
                                </div>
                                <div class="help-data"><?php echo $rowmsg['person_email']; ?></div>
                                <div class="help-data"><?php echo $rowmsg['person_msg']; ?></div>
                            </div>

                            <?php
                        }

                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        let sidebar = document.querySelector(".sidebar");
        let sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = function () {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
        };
    </script>
</body>

</html>