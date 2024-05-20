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
            <div class="search-box px-5">
                <h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Game is life</h1>
            </div>
            <div class="profile-details">
                <span class="admin_name px-5"><?php echo "Hello" . " " . $_SESSION['g_admin']; ?></span>
            </div>
        </nav>
        <div class="home-content">
            <div class="sales-boxes">
                <div class="recent-sales box">
                    <div class="container">
                        <div class="text">
                            ADD NEW GAME OFFER
                        </div>
                        <form method="post" enctype="multipart/form-data">
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="text" name="goffern" required>
                                    <div class="underline"></div>
                                    <label for="">Game Offer Name</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="text" name="gofferap" required>
                                    <div class="underline"></div>
                                    <label for="">Actual Game Price</label>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="input-data">
                                    <input type="text" name="gofferp" required>
                                    <div class="underline"></div>
                                    <label for="">Game Price For Offer</label>
                                </div>
                            </div>

                            <div class="input-data">
                                <div class="contain">
                                    <div class="card">
                                        <h3>Upload Image</h3>
                                        <div class="drop_box">
                                            <header>
                                                <h4>Select Image here</h4>
                                            </header>
                                            <p>Files Supported: PDF, TEXT, DOC , DOCX</p>
                                            <input id="fileID" name="gofferimg" type="file" required>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="bubbly-button s-btn" name="offer">ADD OFFER</button>
                        </form>
                    </div>
                     <!-- .  -->

                     <h2 class="mt-5 mb-4">Delete Offer</h2>
                    <table class="table table-dark table-striped table-hover" cellpadding="7px">
                        <thead>
                            <th>Game Id</th>
                            <th>Game Name</th>
                            <th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Delete</th>
                        </thead>
                        <tbody>

                            <?php
                            $sqldata = "SELECT * FROM `game_offer`";
                            $resultdata = mysqli_query($conn, $sqldata);

                            while ($rowdata = mysqli_fetch_array($resultdata)) {

                                ?>
                                <tr class="td-row">
                                    <td>
                                        <?php echo $rowdata['offer_id']; ?>
                                    </td>
                                    <td>
                                        <?php echo $rowdata['game_offer_name']; ?>
                                    </td>
                                    <td>
                                        <a href="./delete-offer.php?id=<?php echo $rowdata['offer_id']; ?>">
                                            <Button id="gamedeletebtn"> <img src="./img/trash.png" width="20px"
                                                    height="20px" alt="">
                                                Delete</Button>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>

                        </tbody>
                    </table>


                    <!-- .  -->
                </div>
            </div>
        </div>
    </section>

    <?php
    include ('config.php');
    if (isset($_POST['offer'])) {

        $gname = $_POST['goffern'];
        $gacprice = $_POST['gofferap'];
        $grprice = $_POST['gofferp'];

        $gimage = $_FILES['gofferimg']['name'];
        $temp_name = $_FILES['gofferimg']['tmp_name'];

        $file_ext = explode('.', $gimage);
        $file_ext_check = strtolower(end($file_ext));
        $valid_file_ext = array('png', 'jpg', 'jpeg');

        if (in_array($file_ext_check, $valid_file_ext)) {

            $folder = 'img/' . $gimage;
            move_uploaded_file($temp_name, $folder);

            $query = "INSERT INTO `game_offer`(`game_offer_name`, `game_offer_img`, `game_actual_price`, `game_offer_price`) VALUES ('$gname','$folder','$gacprice','$grprice')";
            $result = mysqli_query($conn, $query);

            if ($result == true) {
                header('Location: games.php');
            } else {
                echo "Error inserting game: " . mysqli_error($conn);
            }
        }
    } 
    ?>

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
    <script src="./script.js"></script>
</body> 

</html>