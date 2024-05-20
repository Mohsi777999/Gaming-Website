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
       <h1>&nbsp;&nbsp;&nbsp;Games are not fake</h1>
      </div>
      <div class="profile-details">
        <span class="admin_name px-5"><?php echo "Hello" . " " . $_SESSION['g_admin']; ?></span>
      </div>
    </nav>
    <div class="home-content">
      <div class="sales-boxes">
        <div class="recent-sales2 box">
          <div class="container">
            <div class="textupdate">
              UPDATE GAME HERE
            </div>

            <!-- .  -->

            <div id="main-content">
              <h5 class="mt-5"><b>Don't Know About Game Id ? Just Scroll Down</b></h5>
              <form class="post-form" method="post">
                <div class="form-group mt-4 mb-4">
                  <label>Enter Game Id :</label>
                  <input class="updateidshow" type="text" name="gid" /> &nbsp; &nbsp;<input class="showgamedata"
                    type="submit" name="showbtn" value="Show" />
                </div>

              </form>

              <?php

              if (isset($_POST['showbtn'])) {
                $gid = $_POST['gid'];
                $sql = "SELECT * FROM `games` WHERE `game_id` = '$gid'";
                $result = mysqli_query($conn, $sql);
                while ($row = mysqli_fetch_array($result)) { ?>

                  <form class="post-form" action="updatedata.php" method="post">

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Game Name</label>
                      <input type="hidden" name="gameid" value="<?php echo $row['game_id']; ?>" />
                      <input type="text" name="gname" value="<?php echo $row['game_name']; ?>" class="form-control"
                        id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Game Price</label>
                      <input type="text" name="gprice" value="<?php echo $row['game_price']; ?>" class="form-control"
                        id="exampleFormControlInput1" placeholder="name@example.com">
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlInput1" class="form-label">Game Genre &nbsp;</label>
                      <select class="genreupdate" name="ggenre">
                        <?php
                        $sql2 = "SELECT * FROM `game_genres`";
                        $result2 = mysqli_query($conn, $sql2);

                        while ($row1 = mysqli_fetch_array($result2)) {

                          if ($row['game_genre'] == $row1['genre']) {
                            $select = "selected";
                          } else {
                            $select = "";
                          }

                          echo "<option {$select} value='{$row1['genre']}'>{$row1['genre']}</option>";
                        }
                        ?>
                      </select>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Game Intro</label>
                      <textarea class="form-control" type="text" name="gintro" id="exampleFormControlTextarea1"
                        rows="7"><?php echo $row['game_para']; ?></textarea>
                    </div>

                    <div class="mb-3">
                      <label for="exampleFormControlTextarea1" class="form-label">Game Minimum Requirement</label>
                      <textarea class="form-control" type="text" name="gmin" id="exampleFormControlTextarea1"
                        rows="7"><?php echo $row['game_min_require']; ?></textarea>
                    </div>

                    <div class="mb-5">
                      <label for="exampleFormControlTextarea1" class="form-label">Game Recommended Requirement</label>
                      <textarea class="form-control" type="text" name="gmax" id="exampleFormControlTextarea1"
                        rows="7"><?php echo $row['game_max_require']; ?></textarea>
                    </div>

                    <div class=" s-btn2">
                      <button type="submit" class="bubbly-button" name="gameupdate">UPDATE GAME</button>
                    </div>

                  </form>

                  <?php
                }
              }
              ?>
            </div>

            <!-- .  -->

          </div>
        </div>
      </div>

      <div class="game-data-for-update container mt-5">
        <h2 class="mt-5 mb-4 text-center idbyname">SEARCH GAME'S ID BY NAMES</h2>
        <form class="d-flex container mt-5">
          <input class="form-control me-2" type="search" id="searching" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

        <h2 class="mt-5 mb-4">Game's Id</h2>
        <table class="table table-dark table-striped table-hover" cellpadding="7px">
          <thead>
            <th>Game Name</th>
            <th>Game Id</th>
          </thead>
          <tbody>

            <?php
            $sqldata = "SELECT `game_id`, `game_name` FROM `games`";
            $resultdata = mysqli_query($conn, $sqldata);

            while ($rowdata = mysqli_fetch_array($resultdata)) {

              ?>
              <tr class="td-row">
                <td>
                  <?php echo $rowdata['game_name']; ?>
                </td>
                <td>
                  <?php echo $rowdata['game_id']; ?>
                </td>
              </tr>

            <?php } ?>

          </tbody>
        </table>

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