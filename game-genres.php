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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/css/alertify.min.css" />
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
                <h1>&nbsp;&nbsp;&nbsp;Game is everything</h1>
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
                            <h2 class="mt-5 mb-4 text-center idbyname">ADD GAME GENRES HERE</h2>
                            <div class="mb-3">
                                <form method="POST">
                                    <label for="exampleFormControlInput1" class="form-label">Add New Genre</label>
                                    <input type="text" name="addgenre" class="form-control"
                                        id="exampleFormControlInput1" required placeholder="Eg: Action or Racing">
                                    <button class="btn btn-outline-primary mt-3" name="addgenrebtn" required
                                        type="submit">Add Genre</button>
                                </form>
                                <form class="d-flex container mt-5">
                                    <input class="form-control me-2" type="search" id="searching" placeholder="Search"
                                        aria-label="Search">
                                    <button class="btn btn-outline-success" type="submit">Search</button>
                                </form>
                            </div>

                            <?php
                            if (isset($_POST['addgenrebtn'])) {
                                $newgenre = mysqli_real_escape_string($conn, $_POST['addgenre']);
                                $genrequery = "INSERT INTO `game_genres`(`genre`) VALUES ('$newgenre')";
                                $genreres = mysqli_query($conn, $genrequery);
                            }
                            ?>

                            <!-- Edit Student Modal -->
                            <div class="modal fade" id="genreEditModal" tabindex="-1"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Edit Game Genre</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <form id="updategenre">
                                            <div class="modal-body">

                                                <div id="errorMessageUpdate" class="alert alert-warning d-none"></div>

                                                <input type="hidden" name="genre_id" id="genre_id">

                                                <div class="mb-3">
                                                    <label for="">Game Genre</label>
                                                    <input type="text" name="genrename" id="genrename"
                                                        class="form-control" />
                                                </div>

                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-bs-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Update Game Genre</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>

                            <!-- Table  -->

                            <div class="container mt-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="card tbformb">
                                            <div class="card-header">
                                                <h4>Update & Delete Game Genre Here</h4>
                                            </div>
                                            <div class="card-body">
                                                <table id="myTable" class="table table-dark table-striped table-hover">
                                                    <thead>
                                                        <tr>
                                                            <th>Genre ID</th>
                                                            <th>Game Genre Names</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $query = "SELECT * FROM `game_genres`";
                                                        $query_run = mysqli_query($conn, $query);

                                                        if (mysqli_num_rows($query_run) > 0) {
                                                            foreach ($query_run as $gamegenre) {
                                                                ?>
                                                                <tr class="td-row">
                                                                    <td><?= $gamegenre['id'] ?></td>
                                                                    <td><?= $gamegenre['genre'] ?></td>
                                                                    <td>
                                                                        <button type="button" value="<?= $gamegenre['id']; ?>"
                                                                            class="editgenreBtn btn btn-success btn-sm">Edit</button>
                                                                        <button type="button" value="<?= $gamegenre['id']; ?>"
                                                                            class="deletegenreBtn btn btn-danger btn-sm">Delete</button>
                                                                    </td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


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

        let editbtn = document.querySelector('.genreeditbtn');
        let editpop = document.querySelector('.edit-popup');

        function popupshow() {
            editpop.style.display = "block";
        }

        // .
        $(document).on('click', '.editgenreBtn', function () {

            var genre_id = $(this).val();

            $.ajax({
                type: "GET",
                url: "gamegenreprocess.php?genre_id=" + genre_id,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 404) {

                        alert(res.message);
                    } else if (res.status == 200) {

                        $('#genre_id').val(res.data.id);
                        $('#genrename').val(res.data.name);
                        $('#genreEditModal').modal('show');
                    }

                }
            });

        });

        $(document).on('submit', '#updategenre', function (e) {
            e.preventDefault();

            var formData = new FormData(this);
            formData.append("update_genre", true);

            $.ajax({
                type: "POST",
                url: "gamegenreprocess.php",
                data: formData,
                processData: false,
                contentType: false,
                success: function (response) {

                    var res = jQuery.parseJSON(response);
                    if (res.status == 422) {
                        $('#errorMessageUpdate').removeClass('d-none');
                        $('#errorMessageUpdate').text(res.message);

                    } else if (res.status == 200) {

                        $('#errorMessageUpdate').addClass('d-none');

                        alertify.set('notifier', 'position', 'top-right');
                        alertify.success(res.message);

                        $('#genreEditModal').modal('hide');
                        $('#updategenre')[0].reset();

                        $('#myTable').load(location.href + " #myTable");

                    } else if (res.status == 500) {
                        alert(res.message);
                    }
                }
            });

        });

        $(document).on('click', '.deletegenreBtn', function (e) {
            e.preventDefault();

            if (confirm('Are you sure you want to delete this game genre ?')) {
                var genre_id = $(this).val();
                $.ajax({
                    type: "POST",
                    url: "gamegenreprocess.php",
                    data: {
                        'delete_genre': true,
                        'genre_id': genre_id
                    },
                    success: function (response) {

                        var res = jQuery.parseJSON(response);
                        if (res.status == 500) {

                            alert(res.message);
                        } else {
                            alertify.set('notifier', 'position', 'top-right');
                            alertify.success(res.message);

                            $('#myTable').load(location.href + " #myTable");
                        }
                    }
                });
            }
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
</body>

</html>