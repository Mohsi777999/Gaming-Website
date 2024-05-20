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
        <h1>&nbsp;&nbsp;Games For Legends</h1>
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
              UPLOAD GAME HERE
            </div>
            <form action="upload_process.php" method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="input-data">
                  <input type="text" name="gamename" required>
                  <div class="underline"></div>
                  <label for="">Game Name</label>
                </div>
                <div class="input-data">
                  <select name="gamegenre" id="genre" required>
                    <option value="" disabled selected>Choose Genre</option> <?php
                    $sqldrop = "SELECT id, genre FROM game_genres";
                    $resultdrop = mysqli_query($conn, $sqldrop);
                    if (mysqli_num_rows($resultdrop) > 0) {
                      // Loop through results and populate options
                      while ($row = mysqli_fetch_assoc($resultdrop)) {
                        $genre_name = $row['genre'];
                        $genre_id = $row['id'];
                        echo "<option value='$genre_name'>$genre_name</option>";
                      }
                    } else {
                      echo "<option>No genres found</option>";
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" name="gameprice" required>
                  <div class="underline"></div>
                  <label for="">Game Price</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" name="gameintro" required>
                  <div class="underline"></div>
                  <label for="">Game Introdcution</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" name="gamemin" required>
                  <div class="underline"></div>
                  <label for="">Game Minimum Requirement</label>
                </div>
              </div>
              <div class="form-row">
                <div class="input-data">
                  <input type="text" name="gamerec" required>
                  <div class="underline"></div>
                  <label for="">Game Recommended Requirement</label>
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
                      <input id="fileID" name="gameimg" type="file" required>
                    </div>
                  </div>
                </div>
              </div>
              <button type="submit" class="bubbly-button s-btn" name="gamepublish">UPLOAD GAME</button>
            </form>
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