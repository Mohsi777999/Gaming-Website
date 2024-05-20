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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
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
            <div class="search-box px-5">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Game is emotion</h1>
            </div>
            <div class="profile-details">
                <span class="admin_name px-5"><?php echo "Hello" . " " . $_SESSION['g_admin']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales2 box">
                    <div class="container">

                        <div class="game-data-for-update container mt-5">
                            <h2 class="mt-5 mb-4 text-center idbyname">DELETE GAMES HERE</h2>
                            <form class="d-flex container mt-5">
                                <input class="form-control me-2" type="search" id="searching" placeholder="Search"
                                    aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>

                            <h2 class="mt-5 mb-4">All Games Record</h2>
                            <table class="table table-dark table-striped table-hover" cellpadding="7px">
                                <thead>
                                    <th>Game Id</th>
                                    <th>Game Name</th>
                                    <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th>
                                </thead>
                                <tbody>

                                    <?php
                                    $sqldata = "SELECT `game_id`, `game_name` FROM `games`";
                                    $resultdata = mysqli_query($conn, $sqldata);

                                    while ($rowdata = mysqli_fetch_array($resultdata)) {

                                        ?>
                                        <tr class="td-row">
                                            <td>
                                                <?php echo $rowdata['game_id']; ?>
                                            </td>
                                            <td>
                                                <?php echo $rowdata['game_name']; ?>
                                            </td>
                                            <td>
                                                <a href="./delete-process.php?id=<?php echo $rowdata['game_id']; ?>">
                                                    <Button id="gamedeletebtn"> <img src="./img/trash.png" width="20px"
                                                            height="20px" alt="">
                                                        Delete</Button>
                                                </a>
                                            </td>
                                        </tr>

                                    <?php } ?>

                                </tbody>
                            </table>

                        </div>

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

        $(document).ready(function () {
            $("#searching").on("keyup", function () {
                var value = $(this).val().toLowerCase();
                $(".td-row").filter(function () {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</body>

</html>