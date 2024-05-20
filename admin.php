<?php include ("config.php");
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

  <?php include ("sidebar.php"); ?>

  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class="bx bx-menu sidebarBtn"></i>
        <span class="dashboard">Dashboard</span>
      </div>
      <div class="search-box">
        <input id="dashsearch" type="seacrh" placeholder="Search..." />
        <i class="bx bx-search"></i>
      </div>
      <div class="profile-details">
        <span class="admin_name px-5"><?php echo "Hello" . " " . $_SESSION['g_admin']; ?></span>
      </div>
    </nav>

    <div class="home-content">
      <div class="overview-boxes">
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Overall Games</div>
            <?php
            $fetchgames = "SELECT COUNT(*) AS total_games FROM games";
            $exe = mysqli_query($conn, $fetchgames);
            if (mysqli_num_rows($exe) > 0) {
              $gdata = mysqli_fetch_assoc($exe);
              $totalGames = $gdata["total_games"];
              echo "<div class='number mx-5'>$totalGames</div>";
            } else {
              echo "No games found in the database.";
            }
            ?>
          </div>
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Number Of Downloads&nbsp;</div>
            <?php
            $fetchdownloads = "SELECT SUM(downloads) AS tdown FROM `games`;
            ";
            $downres = mysqli_query($conn, $fetchdownloads);
            if (mysqli_num_rows($downres) > 0) {
              $downdata = mysqli_fetch_assoc($downres);
              $tdown = $downdata["tdown"];
              $space = "&nbsp;";
              echo "<div class='number mx-5'>$space $space $space $tdown</div>";
            } else {
              echo "No games downloads data found in database.";
            }
            ?>
            <div class="indicator">
            </div>
          </div>
          <!-- <i class="bx bxs-cart-add cart two"></i> -->
        </div>

        <div class="box">
          <div class="right-side">
            <div class="box-topic">Total Users</div>
            <?php
            $countusers = "SELECT COUNT(*) AS ucount FROM user";
            $userres = mysqli_query($conn, $countusers);
            if (mysqli_num_rows($userres) > 0) {
              $udata = mysqli_fetch_assoc($userres);
              $tusers = $udata["ucount"];
              echo "<div class='number mx-5'>$tusers</div>";
            } else {
              echo "No Users";
            }
            ?>
          </div>
          <!-- <i class="bx bx-cart cart three"></i> -->
        </div>
        <div class="box">
          <div class="right-side">
            <div class="box-topic">Overall Genres</div>
            <?php
            $countgen = "SELECT COUNT(*) AS gcount FROM game_genres";
            $grres = mysqli_query($conn, $countgen);
            if (mysqli_num_rows($grres) > 0) {
              $gendata = mysqli_fetch_assoc($grres);
              $tg = $gendata["gcount"];
              echo "<div class='number mx-5'>$tg</div>";
            } else {
              echo "No Genres";
            }
            ?>
          </div>
          <!-- <i class="bx bxs-cart-download cart four"></i> -->
        </div>
      </div>

      <div class="sales-boxes">
        <div class="recent-sales box">
          <div class="title">Games Downloads</div>

          <div class="sales-details">
            <table class="table table-hover" cellpadding="7px">
              <thead>
                <th>Game</th>
                <th>Downloads</th>
              </thead>
              <tbody>

                <?php
                $sqldata = "SELECT `game_name`, `downloads` FROM `games`";
                $resultdata = mysqli_query($conn, $sqldata);

                while ($rowdata = mysqli_fetch_array($resultdata)) {

                  ?>
                  <tr class="td-row">
                    <td>
                      <?php echo $rowdata['game_name']; ?>
                    </td>
                    <td>
                      <?php echo $rowdata['downloads']; ?>
                    </td>
                  </tr>

                <?php } ?>

              </tbody>
            </table>

          </div>
          <!-- <div class="button">
            <a href="#">See All</a>
          </div> -->
        </div>
        <div class="top-sales box">
          <div class="title">Active Game Offers</div>
          <ul class="top-sales-details">
            <li>
              <?php
              $sqlofer = "SELECT * FROM `game_offer`";
              $resofer = mysqli_query($conn, $sqlofer);
              while ($rowofer = mysqli_fetch_array($resofer)) { ?>

                <div class="offer-tab">
                  <a>
                    <img src="<?php echo $rowofer['game_offer_img']; ?>" alt="" />
                    <span class="product"><?php echo $rowofer['game_offer_name']; ?></span>
                  </a>
                  <span><del class="price"><?php echo $rowofer['game_actual_price'] . " " . "PKR" ?></del></span>
                  <span class="price"><?php echo $rowofer['game_offer_price'] . " " . "PKR" ?></span>
                </div>
                <?php
              }
              ?>
            </li>
          </ul>
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
      $("#dashsearch").on("keyup", function () {
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